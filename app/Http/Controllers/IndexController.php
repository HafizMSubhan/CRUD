<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\student;
use Illuminate\Http\Request;

use App\Models\Profile;

class IndexController extends Controller
{
    public function index(){

        $data = student::find(1);
        dd($data->course);
        return course::with('student')->get();
    }
}
