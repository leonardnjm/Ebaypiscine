<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
                     if (Auth::user()->role == 'Vendeur') {
            return back();
        }
         
                if (Auth::user()->role == 'ADMIN') {
            return $next($request);
        }else{
           return back();
        }
    }
}
