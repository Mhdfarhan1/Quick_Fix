<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        if (Auth::check()) {
            // Kalau user login dan role admin, arahkan ke dashboard admin
            if ((Auth::user()->role->value ?? Auth::user()->role) === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // Jika role lain, arahkan sesuai role lain (jika ada)
            return redirect('/');
        }

        return $next($request);
    }
}
