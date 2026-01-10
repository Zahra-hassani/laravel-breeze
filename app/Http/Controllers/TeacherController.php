<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TeacherController extends Controller
{
    //
    public function index(){
        $teahers = teacher::all();
        return view("Teacher.home")->with("teachers",$teahers);
    }
    public function edit($id){
        $teacher = teacher::findOrFail($id);
        Gate::authorize('update',$teacher);
        return view('Teacher.edit')->with('teacher',$teacher);
    }
    public function update(Request $request,$id){
        $teacher = teacher::findOrFail($id);
        Gate::authorize('delete',$teacher);
        $teacher->name = $request->name;
        $teacher->update();
        return redirect("/teacher");
    }
}
