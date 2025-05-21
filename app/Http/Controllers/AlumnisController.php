<?php
namespace App\Http\Controllers;

use App\Models\Alumnis;
use Illuminate\Http\Request;

class AlumnisController extends Controller
{
    // Menampilkan daftar alumni untuk pengguna (hanya melihat)
    public function index()
    {
        // Ambil data alumni dengan pagination (10 per halaman)
        $alumni = Alumnis::paginate(10);

        // Kirim data ke view
        return view('alumnis', compact('alumni'));
    }
    public function adminIndex()
    {
        // Ambil data alumni dengan pagination
        $alumni = Alumnis::orderBy('id', 'desc')->paginate(10);

        // Arahkan ke view khusus admin
        return view('admin.alumnis.index', compact('alumni'));
    }

}
