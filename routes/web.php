<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilKecamatanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;

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
Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', function () {
    return view('user.dashboard-public');
})->name('dashboard');
Route::get('/profil-kecamatan', [UserController::class, 'profilKecamatan'])
    ->name('user.profil.kecamatan');
Route::get('/profil-kecamatan', [ProfilController::class, 'kecamatan'])
    ->name('profil.kecamatan');
Route::get('/profil-desa', [ProfilController::class, 'desa'])
    ->name('profil.desa');
Route::get('/infografis', function () {
    return view('user.infografis');
})->name('infografis');
Route::get('/media', function () {
    return view('user.media-center');
})->name('media');

Route::get('/layanan-surat', function () {
    return view('user.layanan-surat');
})->name('layanan.surat');

Route::get('/pengajuan-surat', function () {
    return view('user.pengajuan-surat');
})->name('pengajuan.surat');

// USER
Route::get('/profil-kecamatan', function () {
    $data = \App\Models\ProfilKecamatan::first();
    return view('user.profil-kecamatan', compact('data'));
})->name('profil.kecamatan');

Route::get('/profil-kecamatan', [ProfilController::class, 'kecamatan'])->name('profil.kecamatan');

Route::prefix('admin')->name('admin.')->group(function () {

    // LOGIN & LOGOUT
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // semua halaman admin butuh auth + admin middleware
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Profil Kecamatan
        Route::get('/profil-kecamatan', [ProfilKecamatanController::class, 'index'])->name('profil.kecamatan');
        Route::post('/profil-kecamatan', [ProfilKecamatanController::class, 'store']);

        // Visi & Misi
        Route::get('/visi-misi', [ProfilKecamatanController::class, 'visiMisi'])->name('visi-misi.index');
        Route::post('/visi-misi', [ProfilKecamatanController::class, 'storeVisiMisi'])->name('visi-misi.store');
    });
});