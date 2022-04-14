<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Donor;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Volunteer;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input )

    {
        // dd($input);

            $user = new User();
            $user->name = $input['name'];
            $user->email = $input['email'];
            $user->phone = $input['phone'];
            $user->address = $input['address'];
            $user->gender = $input['gender'];
            $user->role = $input['role'];
            $user->password = Hash::make($input['password']);
            $user->save();



        if($input['role'] == 'member'){
            $member = new Member();
            $member->caregiver_name = $input['caregiver_name'];
            $member->caregiver_phone = $input['caregiver_phone'];
            $member->caregiver_address = $input['caregiver_address'];
            $member->user_id = $user->id;
            $member->save();
        }


        if($input['role'] == 'partner'){
            $partner = new Partner();
            $partner->partnership_organization = $input['partnership_organization'];
            $partner->partnership_timeline = $input['partnership_timeline'];
            $partner->user_id = $user->id;
            $partner->save();
        }

        if($input['role'] == 'volunteer'){
            $volunteer_available[]=$input['volunteer_available'];
            $vas="";
            foreach($volunteer_available as $va){
                foreach($va as $v){
                    $vas.=$v.",";
                }
            }

            $volunteer = new Volunteer();
            $volunteer->volunteer_time = $input['volunteer_time'];
            $volunteer->volunteer_available = $vas;
            $volunteer->user_id = $user->id;
            $volunteer->save();
        }

        if($input['role'] == 'donor'){
            $donation_plan[]= $input['donation_plan'];
            $don="";
            foreach($donation_plan as $do){
                foreach($do as $d){
                    $don.=$d.",";
                }
            }


            $donor = new Donor();
            $donor->donation_plan = $don;
            $donor->user_id = $user->id;
            $donor->save();
        }


        return $user;

        // Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'phone' => ['required','max:15'],
        //     'address' => ['required'],
        //     'password' => $this->passwordRules(),
        //     'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        // ])->validate();

    }
}
