<?php 

namespace App\Http\Controllers;

use App\Models\Alumnis;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan Dashboard Admin
    public function index()
    {
        // Ambil data ulasan dan alumni
        $ulasan = Ulasan::all();  // Ambil semua ulasan
        $alumni = Alumnis::all(); // Ambil semua alumni

        // Kirim data ke view dashboard
        return view('admin.index', compact('ulasan', 'alumni'));  // Tampilkan data ke view admin.index
    }

    public function dashboard()
{
    return view('admin.dashboard.index');
}

    // Menampilkan daftar ulasan (Admin)
    public function ulasan()
    {
        $ulasan = Ulasan::all();  // Ambil semua data ulasan
        return view('admin.ulasan.index', compact('ulasan'));  // Tampilkan daftar ulasan
    }

    // Menampilkan daftar alumni (Admin)
    public function alumnis()
    {
        $alumni = Alumnis::all();  // Ambil semua data alumni
        return view('admin.alumnis.index', compact('alumni'));  // Tampilkan daftar alumni
    }

    // Menampilkan form untuk menambah alumni (Admin)
    public function createAlumni()
    {
        return view('admin.alumnis.create');  // Tampilkan form untuk menambah alumni
    }

    // Menyimpan Data Alumni
    public function storeAlumni(Request $request)
    {
    // Validasi data yang masuk
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'jenis_kelamin' => 'required|string|max:10',
        'kampus' => 'required|string|max:255',
        'angkatan' => 'required|integer',
        'pekerjaan' => 'required|string|max:255',
        'bidang_keahlian' => 'required|string|max:255',
        'pengalaman' => 'nullable|string',
        'asal' => 'nullable|string',
        'contact' => 'nullable|string',
        'riwayat_pendidikan' => 'nullable|string',
    ]);

    // Menyimpan data alumni baru
    Alumnis::create($validated);

    // Redirect ke halaman alumni dengan notifikasi sukses
    return redirect()->route('admin.alumnis.index')->with('success', 'Alumni berhasil ditambahkan');
    }


    // Menampilkan form untuk edit alumni (Admin)
    public function editAlumni($id)
    {
        $alumni = Alumnis::findOrFail($id);  // Ambil data alumni berdasarkan ID
        return view('admin.alumnis.edit', compact('alumni'));  // Tampilkan form edit
    }

    // Memperbarui data alumni (Admin)
    public function updateAlumni(Request $request, $id)
    {
        $alumni = Alumnis::findOrFail($id);  // Ambil data alumni berdasarkan ID

        // Validasi data alumni yang diperbarui
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'kampus' => 'required|string|max:255',
            'angkatan' => 'required|integer',
            'pekerjaan' => 'required|string|max:255',
            'bidang_keahlian' => 'required|string|max:255',
            'pengalaman' => 'nullable|string',
            'asal' => 'nullable|string',
            'contact' => 'nullable|string',
            'riwayat_pendidikan' => 'nullable|string',
        ]);

        // Memperbarui data alumni
        $alumni->update($validated);

        // Redirect ke alumni index
        return redirect()->route('admin.alumnis.index')->with('success', 'Alumni berhasil diperbarui');
    }

    // Menghapus alumni (Admin)
    public function destroyAlumni($id)
    {
        Alumnis::destroy($id);  // Menghapus alumni berdasarkan ID
        return redirect()->route('admin.alumnis.index')->with('success', 'Alumni berhasil dihapus');
    }

    // Menampilkan form untuk edit ulasan (Admin)
    public function editUlasan($id)
    {
        $ulasan = Ulasan::findOrFail($id);  // Ambil data ulasan berdasarkan ID
        return view('admin.ulasan.edit', compact('ulasan'));  // Tampilkan form edit
    }

    // Memperbarui data ulasan (Admin)
    public function updateUlasan(Request $request, $id)
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
    public function destroyUlasan($id)
    {
        Ulasan::destroy($id);  // Menghapus ulasan berdasarkan ID
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil dihapus');
    }
}