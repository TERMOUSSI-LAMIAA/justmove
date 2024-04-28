<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/loginForm')->with('error', 'You must be logged in.');
        }

        // Check if the authenticated user's role matches the required role
        if (Auth::user()->type_user !== $role) {
            return redirect('/')->with('error', 'You do not have the required access.');
        }
        return $next($request);
    }
}
