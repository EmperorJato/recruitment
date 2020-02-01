<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class HrMiddleware
{

    public function handle($request, Closure $next)
    {

        if(Auth::user()->user_type == 'hr'){

            return $next($request);
        }
        
        return redirect('/home');
    }
}
