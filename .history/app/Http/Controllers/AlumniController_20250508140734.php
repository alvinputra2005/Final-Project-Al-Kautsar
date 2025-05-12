<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::all();
        return view('alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('alumni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'kampus' => 'required|string|max:50',
            'angkatan' => 'required|integer',
            'pekerjaan' => 'nullable|string|max:100',
            'bidang_keahlian' => 'nullable|string|max:100',
            'pengalaman' => 'nullable|string',
            'asal' => 'nullable|string|max:100',
            'contact' => 'nullable|string|max:50',
            'riwayat_pendidikan' => 'nullable|string',
        ]);

        Alumni::create($request->all());

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil ditambahkan');
    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'kampus' => 'required|string|max:50',
            'angkatan' => 'required|integer',
            'pekerjaan' => 'nullable|string|max:100',
            'bidang_keahlian' => 'nullable|string|max:100',
            'pengalaman' => 'nullable|string',
            'asal' => 'nullable|string|max:100',
            'contact' => 'nullable|string|max:50',
            'riwayat_pendidikan' => 'nullable|string',
        ]);

        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil diperbarui');
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil dihapus');
    }
}
