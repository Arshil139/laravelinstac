<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){

            if(Auth::user()->role== '1'){


                return $next($request);
            } else{
                return redirect('/')->with('message','denied');
            }

        }else{
            return redirect('/login')->with('message','login to access');

        }
        return $next($request);
    }
}
