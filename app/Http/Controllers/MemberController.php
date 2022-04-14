<?php

namespace App\Http\Controllers;


use App\Models\Meal;
use App\Models\User;
use App\Models\Member;
use App\Models\MemberOrder;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //member index
    public function index(){
        $mealData = Meal::get();
        $member = Member::get();
        return view('User.Member.memberIndex')->with(['mealData' => $mealData]);
    }

    //member mmeal details page
    public function memberMealDetails($id){
        $mealDetails = Meal::where('id', $id)->first();
        // $care = Member::where('id', $id)->first();
        return view('User.Member.memberMealDetails')->with(['mealDetails' => $mealDetails]);
    }

    //member order meal
    public function memberOrder(Request $request){
        $mealOrder = new MemberOrder();

        if($request->hasfile('meal_image')){

            $imageFile = $request->file('meal_image');
            $imageName = uniqid().'_'.$imageFile->getClientOriginalName();
            $imageFile->move(public_path().'./uploads/order', $imageName);

            $mealOrder->meal_image = $imageName;
        }

        $mealOrder->member_name = $request->input('member_name');
        $mealOrder->member_address = $request->input('member_address');
        $mealOrder->member_phone = $request->input('member_phone');
        $mealOrder->meal_name = $request->input('meal_name');
        $mealOrder->meal_type = $request->input('meal_type');
        $mealOrder->partner_organizations = $request->input('partner_organizations');
        $mealOrder->partner_address = $request->input('partner_address');
        $mealOrder->type_of_meal = $request->input('type_of_meal');
        $mealOrder->save();

        return redirect()->route('member#index');
    }
}
