<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\Message;
use auth;

class MessageController extends Controller
{
    public function showMessagePage($id,Request $req){
        $to_id = $id;
        $from_id = $req->user()->profile->id;
         $data = Message::where(['to_id'=>$id])->get();
        // $profile = UserProfile::find($to_id);
         //$msgId = Message::where(['to_id'=>$profile])->get()->toArray();
        // $data = Message::all();
        //echo "<pre>";print_r($data);die;
         return view('profile.message',compact('data','to_id'));
    }

    public function saveMessage(Request $request){
        $request->validate([
            'message_body'=>'required'
        ]);

        Message::create([
            'user_id'=>auth::user()->id,
            'user_profile_id'=>auth::user()->profile->id,
            'from_id'=>auth::user()->profile->id,
            'to_id'=>$request['to_id'],
            'message_body'=>$request['message_body'],
        ]);
        return back();


    }
}
