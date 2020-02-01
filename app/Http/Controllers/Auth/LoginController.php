<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    //protected $redirectTo = RouteServiceProvider::HOME;


    public function redirectTo(){

        if (Auth::user()->user_type == 'hr'){

            return '/dashboard';

        } else {

            return '/home';
        }

        
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
