<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = student::all();
        return view("Student.home")->with("students",$students);
    }

    public function edit($id){
        $student = student::findOrFail($id);
        return view("Student.edit",compact('student'));
    }

    public function update(Request $request, $id){
        $student = student::findOrFail($id);
        $student->name = $request->name;
        $student->lastName = $request->lastName;
        $student->update();
    }

    public function delete($id){
        student::findOrFail($id)->delete();
        return redirect("/student");
    }
}
