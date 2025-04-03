<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GuestRestrict
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guest()) {
            return redirect()->route('home')->with("error", 'You can\'t access this section of the site.
            In order to continue,
            <a href="' . route('login.form') . '" class="text-orange-300 hover:underline hover:text-cyan-500">Login</a> or
            <a href="' . route('signup.form') . '" class="text-orange-300 hover:underline hover:text-cyan-500">Sign Up</a>');
        }

        return $next($request);
    }
}
