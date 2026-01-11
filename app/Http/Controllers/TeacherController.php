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
        $message = session()->get("message");
        return view("Teacher.home",["message"=>$message])->with("teachers",$teahers);
    }
    public function edit($id){
        $teacher = teacher::findOrFail($id);
        Gate::authorize('update',$teacher);
        return view('Teacher.edit')->with('teacher',$teacher);
    }
    public function update(Request $request,$id){
        $teacher = teacher::findOrFail($id);
        Gate::authorize('update',$teacher);
        $teacher->name = $request->name;
        $teacher->update();
        session()->flash("message","updated successfully");
        return redirect("/teacher");
    }
     
    public function Session(){
        session()->put("new session","The first session");
        $session = session()->get('new session');
        return $session;
    }
}
