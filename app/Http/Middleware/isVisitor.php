<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->role==='user'){
                return redirect('/dashboard')->with('success','Anda sudah dalam keadaan Login');
            }
            if(Auth::user()->role==='admin'){
                return redirect('/admin')->with('success','Anda sudah dalam keadaan Login');
            }
        }
        return $next($request);
    }
}
