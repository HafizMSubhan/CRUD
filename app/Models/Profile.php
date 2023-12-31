<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $table = 'profiles';
    protected $primarykey = 'profile_id';
    use HasFactory;
    public function getuser(){
        return $this->belongsTo(User::class,'profile_id', 'user_id');
    }
    
}
