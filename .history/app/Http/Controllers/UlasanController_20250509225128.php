<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function index()
    {
        $ulasan = Ulasan::all();  // Menampilkan semua ulasan untuk admin
        return view('admin.ulasan.index', compact('ulasan'));
    }

    public function index2()
    {
        $ulasan = Ulasan::all();  // Menampilkan semua ulasan untuk pengguna
        return view('home.ulasan', compact('ulasan'));
    }

    public function create()
    {
        return view('ulasan.create');  // Menampilkan form tambah ulasan
    }

    public function store(Request $request)
    {
        Ulasan::create($request->all());  // Menyimpan ulasan baru
        return redirect()->route('ulasan.index2')->with('success', 'Ulasan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $ulasan = Ulasan::findOrFail($id);  // Menampilkan form edit ulasan
        return view('admin.ulasan.edit', compact('ulasan'));
    }

    public function update(Request $request, $id)
    {
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->update($request->all());  // Memperbarui ulasan
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Ulasan::destroy($id);  // Menghapus ulasan
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil dihapus');
    }
}
