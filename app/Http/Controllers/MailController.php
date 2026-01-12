<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MailController extends Controller
{
    //
    public function index (){
        // Cache::put("name","From Email",180);
        $session = Cache::get("name");
        // Cache::forget("name");
        return $session;
    }
}
