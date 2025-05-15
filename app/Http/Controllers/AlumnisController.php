<?php
namespace App\Http\Controllers;

use App\Models\Alumnis;
use Illuminate\Http\Request;

class AlumnisController extends Controller
{
    // Menampilkan daftar alumni untuk pengguna (hanya melihat)
    public function index()
    {
        // Ambil data alumni dengan pagination (8 per halaman)
        $alumni = Alumnis::paginate(6);

        // Kirim data ke view
        return view('alumnis', compact('alumni'));
    }
}
