<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;

class student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'student_id'; 
    protected $fillable = ['name','email','class'];
    public function course() {

        return $this->belongsToMany(course::class, 'student_course', 'student_id', 'course_id');
    }

}
