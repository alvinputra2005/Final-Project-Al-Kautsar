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

    // Menampilkan daftar ulasan untuk admin
    public function index()
    {
        $ulasan = Ulasan::all();  // Ambil semua ulasan untuk ditampilkan ke admin
        return view('admin.ulasan.index', compact('ulasan'));  // Tampilkan ulasan untuk admin
    }

    // Menampilkan form untuk edit ulasan (Admin)
    public function edit($id)
    {
        $ulasan = Ulasan::findOrFail($id);  // Ambil data ulasan berdasarkan ID
        return view('admin.ulasan.edit', compact('ulasan'));  // Tampilkan form edit
    }

    // Memperbarui data ulasan (Admin)
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

    // Menghapus ulasan (Admin)
    public function destroy($id)
    {
        Ulasan::destroy($id);  // Menghapus ulasan berdasarkan ID
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil dihapus');
    }
}
