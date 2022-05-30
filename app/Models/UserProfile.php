<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','bio','education','date_of_birth','gender','profile_picture','caption'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function yourSelf(){
        return $this->hasOne(YourSelf::class);
    }

    public function photo(){
        return $this->hasMany(MorePhoto::class);
    }

    

    
    
}


