<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\Message;
use auth;

class MessageController extends Controller
{
    public function showMessagePage($to_id){
         $data = Message::find($to_id)->where('to_id',$to_id)->get()->toArray();
        // $profile = UserProfile::find($to_id);
         //$msgId = Message::where(['to_id'=>$profile])->get()->toArray();
        
        echo "<pre>";print_r($data);die;
         return view('profile.message',compact('data'));
    }

    public function saveMessage(Request $request){
        $request->validate([
            'message_body'=>'required'
        ]);

        Message::create([
            'user_id'=>auth::user()->id,
            'user_profile_id'=>auth::user()->profile->id,
            'from_id'=>auth::user()->id,
            'to_id'=>$request['to_id'],
            'message_body'=>$request['message_body'],
        ]);
        return back();


    }
}
