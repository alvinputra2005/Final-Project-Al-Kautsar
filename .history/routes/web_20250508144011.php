<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\AlumnisController;
use Illuminate\Support\Facades\Route;

// Homepage (Landing Page)
Route::get('/', [PageController::class, 'home'])->name('home'); // Route utama ke halaman home
Route::get('home', [PageController::class, 'home'])->name('home');


// Halaman Login
Route::get('home/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('home/login', [LoginController::class, 'login']); // Proses login
Route::post('home/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman admin (Manajemen Ulasan)
Route::get('admin/ulasan', [UlasanController::class, 'index'])->name('admin.ulasan.index'); // Menampilkan semua ulasan untuk admin
Route::get('admin/ulasan/{id}/edit', [UlasanController::class, 'edit'])->name('admin.ulasan.edit'); // Edit Ulasan
Route::put('admin/ulasan/{id}', [UlasanController::class, 'update'])->name('admin.ulasan.update'); // Update Ulasan
Route::delete('admin/ulasan/{id}', [UlasanController::class, 'destroy'])->name('admin.ulasan.destroy'); // Hapus Ulasan

// Halaman pengguna (lihat ulasan)
Route::get('home/ulasan', [UlasanController::class, 'index2'])->name('ulasan.index2');  // Menampilkan ulasan untuk semua orang
Route::get('home/create', [UlasanController::class, 'create'])->name('ulasan.create'); // Halaman tambah ulasan
Route::post('ulasan', [UlasanController::class, 'store'])->name('ulasan.store');  // Proses tambah ulasan

// Rute untuk alumni
Route::get('home/alumnis', [AlumnisController::class, 'index'])->name('alumnis.index');
Route::get('home/alumnis/create', [AlumnisController::class, 'create'])->name('alumnis.create');
Route::post('home/alumnis', [AlumnisController::class, 'store'])->name('alumnis.store');
Route::get('home/alumnis/{id}/edit', [AlumnisController::class, 'edit'])->name('alumnis.edit');
Route::put('home/alumnis/{id}', [AlumnisController::class, 'update'])->name('alumnis.update');
Route::delete('home/alumnis/{id}', [AlumnisController::class, 'destroy'])->name('alumnis.destroy');

use App\Http\Controllers\TendikController;

Route::get('/home/tendik', [TendikController::class, 'index'])->name('tendik');

// Halaman kegiatan
Route::get('home/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');

// Halaman prestasi
Route::get('home/prestasi',[PrestasiController::class, 'prestasi'])->name('prestasi');
