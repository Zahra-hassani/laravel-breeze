<?php

namespace App\Http\Controllers;

use App\Jobs\messageJob;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function index (){
        // Cache::put("name","From Email",180);
        $session = Cache::get("name");
        // Cache::forget("name");
        return $session;
    }

    public function sendMail(){
        Mail::to("hassanizahra897@gmail.com")->send(new WelcomeMail());
        return "The email has been sent successfully to Zahra Hassani";
    }
    public function newYearMail(){
        $students = User::all()->where("user_type","student");
        foreach($students as $student){
            messageJob::dispatch($student->email);
        }
        return "The emails have been sent successfully";
    }
}
