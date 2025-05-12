// app/Http/Controllers/AlumnisController.php

namespace App\Http\Controllers;

use App\Models\Alumnis;
use Illuminate\Http\Request;

class AlumnisController extends Controller
{
    // Menampilkan daftar alumni untuk pengguna (hanya melihat)
    public function index()
    {
        // Ambil semua data alumni
        $alumni = Alumnis::all();  // Ambil semua alumni
    
        // Kirim data ke view
        return view('home.alumnis', compact('alumni'));  // Tampilkan data alumni
    }
}
