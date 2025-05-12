<?php
namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // Menampilkan daftar ulasan untuk pengguna (Index 2)
    public function index2()
    {
        $ulasan = Ulasan::all();  // Ambil semua ulasan untuk ditampilkan ke pengguna
        return view('ulasan.index2', compact('ulasan'));  // Tampilkan ulasan untuk pengguna
    }

    // Menampilkan form untuk tambah ulasan (Pengguna)
    public function create()
    {
        return view('ulasan.create');  // Tampilkan form untuk menambah ulasan
    }

    // Menyimpan ulasan baru
    public function store(Request $request)
    {
        // Validasi data ulasan
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required|string',
        ]);
        
        // Menyimpan ulasan
        Ulasan::create($validated);

        // Redirect ke halaman ulasan pengguna setelah berhasil membuat ulasan
        return redirect()->route('ulasan.index2')->with('success', 'Ulasan berhasil ditambahkan');
    }
}