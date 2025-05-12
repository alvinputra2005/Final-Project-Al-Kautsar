<?php
namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumnisController extends Controller
{
    // Menampilkan daftar alumni dengan filter
    public function index(Request $request)
    {
        // Ambil parameter kampus dan angkatan dari request
        $kampus = $request->input('kampus');
        $angkatan = $request->input('angkatan');

        // Query untuk mengambil data alumni
        $query = Alumnis::query();

        // Filter berdasarkan kampus jika dipilih
        if (!empty($kampus)) {
            $query->where('kampus', $kampus);
        }

        // Filter berdasarkan angkatan jika dipilih
        if (!empty($angkatan)) {
            if ($angkatan === 'lama') {
                $tahunBatas = date("Y") - 4;
                $query->where('angkatan', '<', $tahunBatas);
            } else {
                $query->where('angkatan', $angkatan);
            }
        }

        // Ambil data alumni yang sudah difilter
        $alumnis = $query->get();

        // Kembalikan ke view dengan data alumni yang sudah difilter
        return view('home.alumnis', compact('alumnis'));
    }
}
