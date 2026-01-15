<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix("student")->controller(StudentController::class)->middleware("auth")->group(function (){
    Route::get('/','index');
    Route::get('/edit/{id}','edit');
    Route::put('/update/{id}','update');
    Route::get('/delete/{id}','delete');
});

Route::get("/session",[TeacherController::class,"Session"]);
Route::get("/mail",[MailController::class,"index"]);
Route::get("/send",[MailController::class,"sendMail"]);
Route::get("/message",[MailController::class,"newYearMail"]);

Route::prefix('teacher')->controller(TeacherController::class)->middleware("auth")->group(function (){
    Route::get('/',"index");
    Route::get('/edit/{id}','edit');
    Route::post('/update/{id}','update');
});

require __DIR__.'/auth.php';
