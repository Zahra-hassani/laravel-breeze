<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){
        $teahers = teacher::all();
        return view("Teacher.home")->with("teachers",$teahers);
    }
}
