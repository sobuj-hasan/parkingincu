<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role == 2) {
            return $next($request);
        } else {
            Notify::error("Please login to as a User", 'Error');
            return redirect('/login');
        }
    }
}
