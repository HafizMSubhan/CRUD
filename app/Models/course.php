<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;

class course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $primaryKey = 'course_id';

    public function student() {

        return $this->belongsToMany(student::class, 'student_course', 'course_id', 'student_id');
    }
}