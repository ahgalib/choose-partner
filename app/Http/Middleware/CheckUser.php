<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use auth;

class CheckUser
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
    //    if(auth::user()->yourSelf){
    //     return redirect('/');
    //    }
        return $next($request);
    }
}
