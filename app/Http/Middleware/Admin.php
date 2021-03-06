<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\auth;
use Closure;

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
    {   if(Auth::user()->role==2){
        return $next($request);
    }
    return redirect('/login');
    }
}
