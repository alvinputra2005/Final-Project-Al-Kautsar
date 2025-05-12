<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    // Menampilkan daftar ulasan
    public function index()
    {
        $ulasan = Ulasan::all(); // Menampilkan semua ulasan tanpa autentikasi
        return view('ulasan.index', compact('ulasan'));
    }

    // Menampilkan form untuk tambah ulasan
    public function create()
    {
        return view('ulasan.create');  // Menampilkan halaman tambah ulasan
    }

    // Menuju Ulasan yang hanya bisa dilihat oleh user
        public function index2()
    {
        $ulasan = Ulasan::all(); // Menampilkan semua ulasan
        return view('ulasan.index2', compact('ulasan'));
    }


    // Menyimpan ulasan ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'ulasan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Ulasan::create([
            'nama' => $request->nama,
            'ulasan' => $request->ulasan,
            'rating' => $request->rating,
        ]);

        return redirect()->route('ulasan.index2')->with('success', 'Ulasan berhasil ditambahkan!');
    }

    // Menampilkan form untuk edit ulasan
    public function edit($id)
    {
        $ulasan = Ulasan::findOrFail($id);
        return view('ulasan.edit', compact('ulasan'));
    }

    // Mengupdate ulasan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'ulasan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $ulasan = Ulasan::findOrFail($id);
        $ulasan->update([
            'nama' => $request->nama,
            'ulasan' => $request->ulasan,
            'rating' => $request->rating,
        ]);

        return redirect()->route('ulasan.index')->with('success', 'Ulasan berhasil diperbarui!');
    }

    // Menghapus ulasan
    public function destroy($id)
    {
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->delete();

        return redirect()->route('ulasan.index')->with('success', 'Ulasan berhasil dihapus!');
    }
}