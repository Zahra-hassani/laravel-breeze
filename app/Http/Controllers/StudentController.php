<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
    //
    public function index(){
        $students = student::all();
        return view("Student.home")->with("students",$students);
    }

    public function edit($id){
        $student = student::findOrFail($id);
        Gate::authorize("edit-student",$student);
        return view("Student.edit",compact('student'));
    }

    public function update(Request $request, $id){
        $student = student::findOrFail($id);
        Gate::authorize('edit-student',$student);
        $student->name = $request->name;
        $student->lastName = $request->lastName;
        $student->update();
        return redirect("/student");
    }

    public function delete($id){
        $student = student::findOrFail($id)->delete();
        Gate::authorize('student',$student);
        return redirect("/student");
    }
}
