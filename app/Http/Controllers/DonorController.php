<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Donate;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    //index
    public function index(){
        $donationDetails = Donate::get();
        return view('User.Donor.donorIndex')->with(['donationDetails' => $donationDetails]);
    }

    //donoation page
    public function makeDonation(){
        $donor_data = Donor::get();
        return view('User.Donor.makeDonation')->with(['donorData'=> $donor_data]);
    }

    //donate
    public function donate(Request $request){

        $donate = new Donate();

        $donate->donar_name = $request->input('donar_name');
        $donate->donation_amount = $request->input('donation_amount');
        $donate->payment_type = $request->input('payment_type');
        $donate->date = $request->input('date');
        $donate->donor_id = $request->input('donor');
        $donate->save();
        return redirect()->route('donor#index')->with(['donation' , 'Donation Done Successfully']);
    }

    //update donor
    public function updateDonor(){
        return view('User.Donor.updateDonor');
    }
}
