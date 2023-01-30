<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\Message;
use auth;

class MessageController extends Controller
{
    public function showMessagePage($id,Request $req){
        $profile_id = $id;
        //$from_id = $req->user()->profile->id;
         $data = Message::with('replies')->where('profile_id',$id)->orWhere('user_id',Auth::id())->whereNull('parent_id')->get();

         return view ('profile.message',compact('data','profile_id'));
    }

    public function saveMessage(Request $request){
        $request->validate([
            'message_body'=>'required'
        ]);

        Message::create([
            'user_id'=>auth::user()->id,
            'profile_id'=>$request['profile_id'],
            'parent_id'=>$request['parent_id'],
            'message_body'=>$request['message_body'],
        ]);
        return back();
    }

    // public function showMessageChatPage($id,Request $req){
    //     $to_id = $id;
    //     $from_id = $req->user()->profile->id;
    //     $data = Message::wuth('replies')->get();
    //     return view('profile.message',compact('data','to_id'));
    // }
}
