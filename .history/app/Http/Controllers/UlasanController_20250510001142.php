<?php
namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // Menampilkan daftar ulasan untuk admin
    public function index()
    {
        $ulasan = Ulasan::all();  // Ambil semua ulasan untuk admin
        return view('admin.ulasan.index', compact('ulasan'));
    }

    // Menampilkan form untuk tambah ulasan untuk pengguna
    public function create()
    {
        return view('ulasan.create');  // Form tambah ulasan untuk pengguna
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

        return redirect()->route('ulasan.index')->with('success', 'Ulasan berhasil ditambahkan');
    }

    // Menampilkan form untuk edit ulasan
    public function edit($id)
    {
        $ulasan = Ulasan::findOrFail($id);  // Ambil data ulasan berdasarkan ID
        return view('admin.ulasan.edit', compact('ulasan'));  // Tampilkan form edit
    }

    // Memperbarui data ulasan
    public function update(Request $request, $id)
    {
        $ulasan = Ulasan::findOrFail($id);  // Ambil ulasan berdasarkan ID

        // Validasi data ulasan yang diperbarui
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required|string',
        ]);
        
        // Memperbarui data ulasan
        $ulasan->update($validated);

        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil diperbarui');
    }

    // Menghapus ulasan
    public function destroy($id)
    {
        Ulasan::destroy($id);  // Menghapus ulasan berdasarkan ID
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil dihapus');
    }
}
