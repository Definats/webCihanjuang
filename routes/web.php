<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;


// Halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Routes admin
Route::prefix('admin')->name('admin.')->group(function () {

    // Login admin
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    // Logout admin
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Semua halaman admin pakai middleware auth + admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // pastikan file dashboard.blade.php ada
    })->name('admin.dashboard');
});

//user
Route::get('/user', [UserController::class, 'index'])->name('user.index');
});
