<?php
namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\Alumni;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Halaman Dashboard Admin
    public function index()
    {
        // Ambil data ulasan dan alumni
        $ulasan = Ulasan::all();
        $alumni = Alumni::all();
    
        // Kirim data ke view
        return view('admin.index', compact('ulasan', 'alumni'));
    }
}
