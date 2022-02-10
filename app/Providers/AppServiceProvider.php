<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{

    // public function register()
    // {
    //     //
    // }
    // public function boot()
    // {
    //     Password::defaults(function() {
    //         Password::min(12)
    //             ->letters()
    //             ->numbers()
    //             ->symbols()
    //             ->mixedCase()
    //             ->uncompromised();

    //     });
    // }
}

// request()->validate(
//     ['new_password' => ['required', 'string', Password::defaults()]]
// );