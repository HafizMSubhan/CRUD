<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    public function getprofile(){
        return $this->hasOne(Profile::class, 'profile_id');
    }
}
