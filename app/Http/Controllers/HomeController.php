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
    public function index()
    {   
        $profile = UserProfile::all();
        $self = YourSelf::all();
        return view('home',compact('profile','self'));
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
