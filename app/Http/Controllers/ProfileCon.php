<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;
use App\Models\YourSelf;
use auth;
class ProfileCon extends Controller
{
    public function createProfile(){
        return view('createProfile');
    }

    public function saveProfile(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        if($request['profile_picture']){
            $image = $request['profile_picture']->store('profile','public');
        }else{
            $image = null;
        }
        UserProfile::create([
            'user_id'=>auth::user()->id,
            'name'=>$request['name'],
            'bio'=>$request['bio'],
            'education'=>$request['education'],
            'date_of_birth'=>$request['birth_date'],
            'gender'=>$request['gender'],
            'profile_picture'=>$image,
            'caption'=>$request['caption'],
        ]);
        return redirect("/profilePage/{$request->user()->profile->id}");
    }

    //this is one way of show specific data by pass there id
    public function showProfilePage($id){
        $data = UserProfile::find($id);
        return view('profile/profilePage',compact('data'));
    }

    //this is another way to show specific data by pass the profile
    // public function showProfilePage(UserProfile $profile){  
    //    return view('profile/profilePage',compact('profile'));
    // }

    public function aboutYourSelfPageForm(){
        
        return view('profile.yourSelf');
    }

    public function saveYourSelfFrom(Request $request){
        //return $request->all();
        YourSelf::create([
            'user_profile_id'=>auth()->user()->profile->id,
            'about_you'=>$request['about_you'],
            'hobbies'=>$request['hobbies'],
            'aim'=>$request['aim'],
            'favourite_thing'=>$request['favourite_thing'],
            'height'=>$request['height'],
            'weight'=>$request['weight'],
            'dream'=>$request['dream'],
            

        ]);
        return back();
    }
}
