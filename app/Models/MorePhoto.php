<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MorePhoto extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','user_profile_id','photo','caption'];

    public function profile(){
        return $this->belongsTo(UserProfile::class);
    }
}
