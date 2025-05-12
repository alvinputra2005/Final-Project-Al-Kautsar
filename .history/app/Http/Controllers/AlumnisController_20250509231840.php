<?php
namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumnisController extends Controller
{
    // Menampilkan daftar alumni
    public function index()
    {
        $alumnis = Alumni::all();
        return view('admin.alumni.index', compact('alumnis'));
    }

    // Menampilkan form tambah alumni
    public function create()
    {
        return view('admin.alumni.create');
    }

    // Menyimpan alumni baru
    public function store(Request $request)
    {
        Alumni::create($request->all());
        return redirect()->route('admin.alumnis.index')->with('success', 'Alumni berhasil ditambahkan');
    }

    // Menampilkan form edit alumni
    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumni'));
    }

    // Memperbarui data alumni
    public function update(Request $request, $id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());
        return redirect()->route('admin.alumnis.index')->with('success', 'Alumni berhasil diperbarui');
    }

    // Menghapus alumni
    public function destroy($id)
    {
        Alumni::destroy($id);
        return redirect()->route('admin.alumnis.index')->with('success', 'Alumni berhasil dihapus');
    }
}

