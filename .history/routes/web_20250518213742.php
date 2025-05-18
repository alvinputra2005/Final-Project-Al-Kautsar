<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SarprasController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Homepage (Landing Page)
Route::get('/', [PageController::class, 'home'])->name('home'); // Route utama ke halaman home
Route::get('home', [PageController::class, 'home'])->name('home');
//-------------------------------------------------------------------------------------------//


// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Middleware untuk mengamankan semua rute admin
Route::middleware('auth')->prefix('admin')->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Ulasan Admin
    Route::get('/ulasan', [AdminController::class, 'ulasan'])->name('admin.ulasan.index');
    Route::get('/ulasan/{id}/edit', [AdminController::class, 'editUlasan'])->name('admin.ulasan.edit');
    Route::put('/ulasan/{id}', [AdminController::class, 'updateUlasan'])->name('admin.ulasan.update');
    Route::delete('/ulasan/{id}', [AdminController::class, 'destroyUlasan'])->name('admin.ulasan.destroy');

    // Alumni Admin
    Route::get('/alumnis', [AdminController::class, 'alumnis'])->name('admin.alumnis.index');
    Route::get('/alumnis/create', [AdminController::class, 'createAlumni'])->name('admin.alumnis.create');
    Route::post('/alumnis', [AdminController::class, 'storeAlumni'])->name('admin.alumnis.store');
    Route::get('/alumnis/{id}/edit', [AdminController::class, 'editAlumni'])->name('admin.alumnis.edit');
    Route::put('/alumnis/{id}', [AdminController::class, 'updateAlumni'])->name('admin.alumnis.update');
    Route::delete('/alumnis/{id}', [AdminController::class, 'destroyAlumni'])->name('admin.alumnis.destroy');
});

//Rute untuk Pengguna (lihat alumni)
Route::get('home/alumnis', [AlumnisController::class, 'index'])->name('alumnis');

// Rute untuk Pengguna (lihat  santri)
Route::get('home/santri', [SantriController::class, 'index'])->name('santri');

// Rute untuk Pengguna (lihat tendik)
Route::get('home/tendik', [TendikController::class, 'index'])->name('tendik');

// Rute untuk Pengguna (lihat Sarpras)
Route::get('home/sarpras', [SarprasController::class, 'index'])->name('sarpras');

// Rute untuk kegiatan
Route::get('home/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');

// Rute untuk prestasi
Route::get('home/prestasi', [PrestasiController::class, 'prestasi'])->name('prestasi');


