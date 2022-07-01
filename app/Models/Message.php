<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','user_profile_id','from_id','to_id','message_body'];

    public function profile(){
        return $this->belongsTo(UserProfile::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
