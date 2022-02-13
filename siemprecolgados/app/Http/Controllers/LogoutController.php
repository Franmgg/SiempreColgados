<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    //Esto lo he visto de este link : https://codeanddeploy.com/blog/laravel/laravel-8-logout-for-your-authenticated-user
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('home');
    }
}
