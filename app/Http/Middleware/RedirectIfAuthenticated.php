<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\user;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        // return $next($request);
        if (Auth::user() == true && Auth::user()->id_roles == 1 && User::find(Auth::user()->id)->status_users=='aktif')
       {
           return redirect()->route('pasien');
       }elseif (Auth::user() == true && Auth::user()->id_roles == 2 && User::find(Auth::user()->id)->status_users=='aktif')
       {
            return redirect()->route('perawat');
       }elseif (Auth::user() == true && Auth::user()->id_roles == 3)
       {
           return redirect()->route('admin');
       }
       return $next($request);
    }
}
