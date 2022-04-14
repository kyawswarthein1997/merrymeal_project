<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Meal;
use App\Models\User;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    //index // dashboard
    public function index(){
        $mealData = Meal::paginate(4);
        return view('User.Partner.partnerIndex')->with(['mealData' => $mealData]);
    }

    //partner add meal
    public function addMeal(){
        $partner_data = Partner::get();
        $user_data = User::get();
        return view('User.Partner.addMeal')->with(['partnerData' => $partner_data, 'userData' => $user_data]);
    }

    public function createMeal(Request $request){

        $validator = Validator::make($request->all(), [
            'meal_name' => 'required',
            'meal_type' => 'required',
            'meal_image' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }


        $meal = new Meal();

        if($request->hasfile('meal_image')){

            $imageFile = $request->file('meal_image');
            $imageName = uniqid().'_'.$imageFile->getClientOriginalName();
            $imageFile->move(public_path().'./uploads/meal', $imageName);

            $meal->meal_image = $imageName;
        }

        $meal->meal_name = $request->input('meal_name');
        $meal->meal_type = $request->input('meal_type');
        $meal->partner_id = $request->input('partner');
        $meal->user_id = $request->input('user');
        $meal->save();
        return redirect()->route('partner#index')->with(['mealCreated', 'Meal Created Sucessfully']);
    }

    //partner edit Meal
    public function editMeal($id){
        $partner_data =  Partner::get();
        $user_data = User::get();
        $editMeal = Meal::where('id', $id)
                    ->first();
        return view('User.Partner.editMeal')->with(['editMeal' => $editMeal, 'userData' => $user_data, 'partnerData' => $partner_data]);
    }

    //partner update meal
    public function updateMeal(Request $request, $id){

       $updateData = $this->requestUpdateMealData($request);

       //get old image
       $updateImgData = Meal::select('meal_image')->where('id', $id)->first();
       $updateImage = $updateImgData['meal_image'];

       //delete old image
       if(File::exists(public_path().'/uploads/meal/'.$updateImage)){
           File::delete(public_path().'/uploads/meal/'.$updateImage);
       }

       //get new image
       $newImageFile = $request->file('meal_image');
       $newImageName = uniqid().'_'.$newImageFile->getClientOriginalName();
       $newImageFile->move(public_path().'./uploads/meal/', $newImageName);

       $updateData['meal_image'] = $newImageName;


       //update database image
       Meal::where('id',$id)->update($updateData);
       return redirect()->route('partner#index')->with(['updateData' => 'Meal updated Sucessfully']);
    }

    // partner delete meal
    public function deleteMeal($id){
        $deleteData = Meal::select('meal_image')->where('id', $id)->first();
        $deleteImage = $deleteData['meal_image'];

        Meal::where('id', $id)->delete(); //db data delete

        //project image folder delete
        if(File::exists(public_path().'/uploads/meal/'.$deleteImage)){
            File::delete(public_path().'/uploads/meal/'.$deleteImage);
        }

        return back()->with(['mealDeleted' => "Meal Delete Successfully"]);
    }

    //update partner
    public function updatePartner(){
        return view('User.Partner.updatePartner');
    }

    //request update category data
    private function requestUpdateMealData($request){
        $arr = [
            'meal_name' => $request->meal_name,
            'meal_type'=> $request->meal_type,
            'partner_id'=>$request->partner,
            'user_id' =>$request->user,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        if(isset($request->meal_image)){
            $arr['meal_image'] = $request->meal_image;
        }

        return $arr;
    }
}
