<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Halaman utama Laravel
Route::get('/', function () {
    return view('welcome');
});

// ==================== ADMIN ==================== //

// Halaman login admin
Route::get('/admin/login', [AdminController::class, 'showLogin'])
    ->name('admin.login')
    ->middleware('guest'); // pastikan user yang sudah login tidak bisa akses login

// Proses login admin
Route::post('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login.post')
    ->middleware('guest');

// Dashboard admin (harus login sebagai admin)
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware('admin'); // gunakan AdminMiddleware

// Logout admin
Route::post('/admin/logout', [AdminController::class, 'logout'])
    ->name('admin.logout')
    ->middleware('admin'); // harus login dulu untuk logout
