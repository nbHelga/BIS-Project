<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute untuk halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

// Proses autentikasi login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route ke halaman dashboard dan halaman lainnya yang dilindungi oleh middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/jadwal', [JadwalKuliahController::class, 'index'])->name('jadwal');
    Route::get('/mata_kuliah', [MataKuliahController::class, 'index'])->name('mata_kuliah');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
