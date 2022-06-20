<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class usersManageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Auth::check()==false){
            return redirect('/');
        }
        if(\Auth::user()->role!='admin'){
            return redirect('/');
        }
        return $next($request);
    }
}
