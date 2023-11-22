<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle($request, Closure $next)
    // {
    //     if ($request->routeIs('/login') || $request->routeIs('/carrito') || $request->routeIs('/categoria{id}') || $request->routeIs('/nosotros')) {
    //         return $next($request);
    //     }
    

    //     // if (!auth()->check()) {
    //     //     return redirect()->route('login.index');
    //     // }
    
    //     return $next($request);
    // }
    
}
