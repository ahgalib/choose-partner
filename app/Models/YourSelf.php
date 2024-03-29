<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YourSelf extends Model
{
    use HasFactory;
    protected $fillable = ['user_profile_id','user_id',',about_you','hobbies','aim','favourite_thing','height','weight','dream',];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function user_profile(){
        return $this->belongsTo(UserProfile::class);
    }
}
