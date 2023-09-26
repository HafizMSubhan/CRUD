<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

class IndexController extends Controller
{
    public function index(){

        return Profile::with('getuser')->get();
    }
}
