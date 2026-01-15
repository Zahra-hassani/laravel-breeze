<?php

namespace App\Providers;

use App\Models\student;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        Gate::define('edit-student',function (User $user, student $student){
            return $user->id === $student->user_id;
        });

        VerifyEmail::toMailUsing(function ($notifiable,$url) {
            return (new MailMessage())->subject("تایید ایمیل")->view("Mail.verify",compact('url'));
        });

    }
    
    /**
     * Bootstrap any application services.
    */
    public function boot(): void
    {
        //
        // Gate::define('delete',function (User $user, student $student, teacher $teacher){
        //     return ($user->id === $student->user_id ) || ($user->id === $teacher->user_id);
        // });
    }
}
