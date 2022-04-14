<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\User;
use App\Models\Donor;
use App\Models\Donate;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Volunteer;
use App\Models\MemberOrder;
use Illuminate\Http\Request;
use App\Models\VolunteerMember;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //index (member List)
    public function index(){
        $memberList = Member::paginate(3);
        return view('Admin.adminIndex')->with(['member' => $memberList]);
    }

    //partner list
    public function partnerList(){
        $partnerList = Partner::paginate(3);
        return view('Admin.adminPartnerList')->with(['partner' => $partnerList]);
    }

    //volunteer list
    public function volunteerList(){
        $volunteerList = Volunteer::paginate(3);
        return view('Admin.adminVolunteerList')->with(['volunteer' => $volunteerList]);
    }

    //donor list
    public function donorList(){
        $donorList = Donor::paginate(3);
        return view('Admin.adminDonorList')->with(['donor' => $donorList]);
    }

    //admin List
    public function adminList(){
        $adminList = User::where('role','admin')->paginate(3);
        return view('Admin.adminList')->with(['admin' => $adminList]);
    }

    //admin member
    public function adminMember(){
        $memberOrder = MemberOrder::get();
        return view('Admin.adminMember')->with(['memberOrder' => $memberOrder]);
    }

    //admin partner
    public function adminPartner(){
        $partnerMeals = Meal::get();
        return view('Admin.adminPartner')->with(['partnerMeals' => $partnerMeals]);
    }

    //admin volunteer
    public function adminVolunteer(){
        $volunterrMember = VolunteerMember::get();
        return view('Admin.adminVolunteer')->with(['volunteerMember' => $volunterrMember]);
    }

    //admin donor
    public function adminDonor(){
        $donorDonation = Donate::get();
        return view('Admin.adminDonor')->with(['donorDonation' => $donorDonation ]);
    }

}
