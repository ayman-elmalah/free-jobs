<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        //Check if user login or not then redirect user if not logged to login page
        if (! Auth::user()->id) {
          return redirect('adminpanel/login');
        }
        return $next($request);
    }
}
