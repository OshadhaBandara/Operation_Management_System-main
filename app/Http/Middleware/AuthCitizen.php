<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCitizen
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
        if(!session('is_clogin') == true)
        {
            return redirect('citizen-login')->with('fail', 'To Get the service you need login first');
        }


        return $next($request);
    }
}
