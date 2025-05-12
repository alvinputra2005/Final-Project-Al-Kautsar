<?php
namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Alumnis;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan Dashboard Admin dengan data alumni dan ulasan
    public function index()
    {
        // Ambil semua data ulasan dan alumni untuk ditampilkan
        $ulasan = Ulasan::all();  // Ambil semua data ulasan
        $alumni = Alumnis::all();  // Ambil semua data alumni
    
        // Kirim data ke view dashboard
        return view('admin.index', compact('ulasan', 'alumni'));
    }

    // Menampilkan daftar ulasan (Admin - hanya melihat)
    public function ulasan()
    {
        $ulasan = Ulasan::all();  // Ambil semua data ulasan
        return view('admin.ulasan.index', compact('ulasan'));  // Tampilkan daftar ulasan
    }

    // Menampilkan daftar alumni (Admin - hanya melihat)
    public function alumnis()
    {
        $alumni = Alumni::all();  // Ambil semua data alumni
        return view('admin.alumnis.index', compact('alumni'));  // Tampilkan daftar alumni
    }
}
