<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserProfile;
use App\Models\YourSelf;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
      if($request->ajax()){
        $data = $request->all();
        //echo "<pre>";print_r($data);die;
        if(isset($data['education']) && !empty($data['education'])){
            $profile = UserProfile::whereIn('education',$data['education'])->get()->toArray();
           //echo "<pre>";print_r($profile);die;
           return view('ajaxProfileListing',compact('profile','self'));
        }

        if(isset($data['sort']) && !empty($data['sort'])){
            if($data['sort'] == "profile_first_to_last"){
                $self = YourSelf::all();
                $profile =UserProfile::with('yourSelf')->orderBy('user_id','Asc')->get()->toArray();
            }
            if($data['sort'] == "profile_last_to_first"){
                $self = YourSelf::all();
                $profile =UserProfile::with('yourSelf')->orderBy('user_id','Desc')->get()->toArray();
            }
            if($data['sort'] == "profile_name_a_z"){
                $self = YourSelf::all();
                $profile =UserProfile::with('yourSelf')->orderBy('name','Asc')->get()->toArray();
            }
            if($data['sort'] == "profile_name_z_a"){
                $self = YourSelf::all();
                $profile =UserProfile::with('yourSelf')->orderBy('name','Desc')->get()->toArray();
            }

           
        } 
         //education sort option
         
        return view('ajaxProfileListing',compact('profile','self'));
      }else{
            $profile = UserProfile::all();
            $self = YourSelf::all();
        }
        $self = YourSelf::all();
        return view('home',compact('profile','self'));


        // if($request->ajax()){
        //     $data = $request->all();
        //     // echo "<pre>";print_r($data);die;
        //     $self=YourSelf::whereIn('hobbies',$data['hobbies'])->get()->toArray();
        //     // echo "<pre>";print_r($self);die;
        //     // $profile = UserProfile::all();
        //     // $self = YourSelf::all();
        //     // if(isset($data['hobbies']) && !empty($data['hobbies'])){
        //     //     $profile->whereIn('profile.hobbies',$data['hobbies']);
        //     // }
        //     return view('home',compact('profile','self'));
        // }else{
            
        //     $profile = UserProfile::all();
        //     $self = YourSelf::all();
        //     return view('home',compact('profile','self'));
        // }
      
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
