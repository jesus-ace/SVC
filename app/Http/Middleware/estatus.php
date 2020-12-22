<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class estatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        if(Auth::guard($guard)->check() && auth()->user()->us_estatus == 0){

            Auth::guard()->logout();

            $request->session()->invalidate();
            return redirect('/');
        }
        return $next($request);
    }
}
