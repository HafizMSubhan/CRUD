<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;
use App\Models\course;

class studentcourse extends Model
{
    use HasFactory;
    protected $table = 'student_course';
    protected $primaryKey = 'sc_id';
}
