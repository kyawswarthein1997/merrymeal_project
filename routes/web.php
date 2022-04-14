<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\VolunteerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(Auth::check()){
        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin#index');
        }

        else if(Auth::user()->role == 'member')
        {
            return redirect()->route('member#index');
        }

        else if(Auth::user()->role == 'partner')
        {
            return redirect()->route('partner#index');
        }

        else if(Auth::user()->role == 'volunteer')
        {
            return redirect()->route('volunteer#index');
        }

        else if(Auth::user()->role == 'donor')
        {
            return redirect()->route('donor#index');
        }
    }
})->name('dashboard');


//Admin
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin#index'); //member list
    Route::get('adminList', [AdminController::class, 'adminList'])->name('admin#adminList'); //admin list
    Route::get('partnerList', [AdminController::class, 'partnerList'])->name('admin#partnerList'); //partner list
    Route::get('volunteerList', [AdminController::class, 'volunteerList'])->name('admin#volunteerList'); //volunteer list
    Route::get('donorList', [AdminController::class, 'donorList'])->name('admin#donorList'); // donor list
    Route::get('adminMember', [AdminController::class, 'adminMember'])->name('admin#adminMember');
    Route::get('adminPartner', [AdminController::class, 'adminPartner'])->name('admin#adminPartner');
    Route::get('adminVolunteer', [AdminController::class, 'adminVolunteer'])->name('admin#adminVolunteer');
    Route::get('adminDonor', [AdminController::class, 'adminDonor'])->name('admin#adminDonor');

});

//Member
Route::group(['prefix' => 'member'], function(){
    Route::get('/', [MemberController::class, 'index'])->name('member#index'); //member dashboard
    Route::get('memberMealDetails/{id}', [MemberController::class, 'memberMealDetails'])->name('member#memberMealDetails'); // member meal details page
    Route::post('memberOrder', [MemberController::class, 'memberOrder'])->name('member#memberOrder'); //member meal order meal
});

//Partner
Route::group(['prefix' => 'partner'], function(){
    Route::get('/', [PartnerController::class, 'index'])->name('partner#index'); //partner dashboard // view meal
    Route::get('addMeal', [PartnerController::class, 'addMeal'])->name('partner#addMeal'); //partner create meal
    Route::post('createMeal', [PartnerController::class, 'createMeal'])->name('partner#createMeal'); //creating Meal
    Route::get('editMeal/{id}', [PartnerController::class, 'editMeal'])->name('partner#editMeal'); //edit Meal
    Route::post('updateMeal/{id}', [PartnerController::class, 'updateMeal'])->name('partner#updateMeal'); //update Meal
    Route::get('deleteMeal/{id}', [PartnerController::class, 'deleteMeal'])->name('partner#deleteMeal'); // delete Meal
    Route::get('updatePartner', [PartnerController::class, 'updatePartner'])->name('partner#update'); //update Partner
});

//Volunteer
Route::group(['prefix' => 'volunteer'], function(){
    Route::get('/', [VolunteerController::class, 'index'])->name('volunteer#index'); //volunteer dashboard
    Route::get('volunteerDetails/{id}', [VolunteerController::class, 'volunteerDetails'])->name('volunteer#volunteerDetails'); // volunteer Details
    Route::post('volunteerMember', [VolunteerController::class, 'volunteerMember'])->name('volunteer#volunteerMember'); //volunteer chosen member
});

//Donor
Route::group(['prefix' => 'donor'], function(){
    Route::get('/', [DonorController::class, 'index'])->name('donor#index'); //donor dashboard
    Route::get('makeDonation', [DonorController::class, 'makeDonation'])->name('donor#makeDonation'); // donor donation page
    Route::post('donate', [DonorController::class, 'donate'])->name('donor#donate');
    Route::get('updateDonor', [DonorController::class, 'updateDonor'])->name('donor#updateDonor'); //update donor
});
