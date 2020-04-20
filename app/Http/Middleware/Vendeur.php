<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Vendeur
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
         
              if (Auth::user()->role == 'ADMIN') {
            return redirect()->route('admin');
        }
         
                if (Auth::user()->role == 'Vendeur') {
            return $next($request);
        }else{
           return back();
        }
         
       
    }
}
