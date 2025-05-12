<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SarprasController;
use Illuminate\Support\Facades\Route;

// Homepage (Landing Page)
Route::get('/', [PageController::class, 'home'])->name('home'); // Route utama ke halaman home
Route::get('home', [PageController::class, 'home'])->name('home');
//-------------------------------------------------------------------------------------------//

// Halaman Login (opsional)
Route::get('home/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('home/login', [LoginController::class, 'login']); // Proses login
Route::post('home/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk Dashboard Admin
Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');  // Admin dashboard

// Rute untuk Admin - Menampilkan Daftar Ulasan dan bisa Edit serta Delete
Route::get('admin/ulasan', [AdminController::class, 'ulasan'])->name('admin.ulasan.index');
Route::get('admin/ulasan/{id}/edit', [AdminController::class, 'edit'])->name('admin.ulasan.edit');
Route::put('admin/ulasan/{id}', [AdminController::class, 'update'])->name('admin.ulasan.update');
Route::delete('admin/ulasan/{id}', [AdminController::class, 'destroy'])->name('admin.ulasan.destroy');
// Rute untuk Pengguna (lihat ulasan)
Route::get('home/ulasan', [UlasanController::class, 'index2'])->name('ulasan.index2');  // Menampilkan ulasan untuk semua orang
Route::get('home/create', [UlasanController::class, 'create'])->name('ulasan.create'); // Halaman tambah ulasan
Route::post('ulasan', [UlasanController::class, 'store'])->name('ulasan.store');  // Proses tambah ulasan


// Rute untuk Alumni - Menampilkan Data Alumni dan Bisa Menambahkan, Edit, Serta Hapus
Route::get('admin/alumnis', [AdminController::class, 'alumnis'])->name('admin.alumnis.index');  // <-- Tambahkan rute ini untuk alumni
Route::get('admin/alumnis/create', [AlumnisController::class, 'create'])->name('admin.alumnis.create');
Route::post('admin/alumnis', [AlumnisController::class, 'store'])->name('admin.alumnis.store');
Route::get('admin/alumnis/{id}/edit', [AlumnisController::class, 'edit'])->name('admin.alumnis.edit');
Route::put('admin/alumnis/{id}', [AlumnisController::class, 'update'])->name('admin.alumnis.update');
Route::delete('admin/alumnis/{id}', [AlumnisController::class, 'destroy'])->name('admin.alumnis.destroy');
//Rute untuk Pengguna (lihat alumni)
Route::get('home/alumnis', [AlumnisController::class, 'index'])->name('alumni');

// Rute untuk Pengguna (lihat  santri)
Route::get('home/santri', [SantriController::class, 'index'])->name('santri');

// Rute untuk Pengguna (lihat tendik)
Route::get('home/tendik', [TendikController::class, 'index'])->name('tendik');

// Rute untuk Pengguna (lihat Sarpras)
Route::get('/sarpras', [SarprasController::class, 'index']);

// Rute untuk kegiatan
Route::get('home/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');

// Rute untuk prestasi
Route::get('home/prestasi', [PrestasiController::class, 'prestasi'])->name('prestasi');
