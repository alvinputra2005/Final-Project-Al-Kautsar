<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // Menampilkan daftar ulasan untuk admin
    public function index()
    {
        $ulasan = Ulasan::all();
        return view('admin.ulasan.index', compact('ulasan'));
    }

    // Menampilkan daftar ulasan untuk pengguna biasa (read-only)
    public function index2()
    {
        $ulasan = Ulasan::all();
        return view('ulasan.index2', compact('ulasan'));
    }

    // Menampilkan form untuk tambah ulasan (hanya untuk pengguna biasa)
    public function create()
    {
        return view('ulasan.create');
    }

    // Menyimpan ulasan baru
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

    // Menampilkan form untuk mengedit ulasan (hanya untuk admin)
    public function edit($id)
    {
        $ulasan = Ulasan::findOrFail($id);
        return view('admin.ulasan.edit', compact('ulasan'));
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

        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil diperbarui!');
    }

    // Menghapus ulasan
    public function destroy($id)
    {
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->delete();

        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil dihapus!');
    }
}