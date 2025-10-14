<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika belum login, arahkan ke halaman login admin
        if (!Auth::check()) {
            return redirect()->route('admin.login')->withErrors([
                'login' => 'Silakan login terlebih dahulu.'
            ]);
        }

        // Jika user bukan admin
        if (Auth::user()->role !== 'admin') {
            Auth::logout();
            return redirect()->route('admin.login')->withErrors([
                'access' => 'Akses ditolak. Anda bukan admin.'
            ]);
        }

        // Jika valid, lanjut ke proses berikutnya
        return $next($request);
    }
}
