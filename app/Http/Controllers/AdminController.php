<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Tampilkan halaman login
    public function showLogin()
    {
        return view('admin.login'); // resources/views/admin/login.blade.php
    }

    // Proses login admin
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // penting

            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['email' => 'Hanya admin yang bisa login'])->onlyInput('email');
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah'])->onlyInput('email');
    }

    // Dashboard admin
    public function dashboard()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');
    }

    // Logout admin
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
