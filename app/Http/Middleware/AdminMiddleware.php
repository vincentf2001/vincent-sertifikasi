<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::check()){
            
            if(Auth::user()->role == '1'){
                return $next($request);
            }else {
                return redirect('/home')->with('message', 'Kamu bukan admin sobat!');
            }

        }else {
            return redirect('/login')->with('message', 'Kamu belum login sobat!');
        }

        return $next($request);
    }
}
