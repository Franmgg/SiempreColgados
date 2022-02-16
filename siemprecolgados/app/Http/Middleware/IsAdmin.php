<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use Illuminate\Http\Request;

class IsAdmin
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
        if (Auth::user() &&  Auth::user()->privilege == 1) {
             return $next($request);
        }
        return redirect('login')->with('error','You have not admin access');
    }
}