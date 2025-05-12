<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function index()
    {
        // Data tendik
        $tendikList = [
            [
                "name" => "Ust. Arif Nur A",
                "nip" => "19810412 200501 1 002",
                "jabatan" => "Kepala TU",
                "pengalaman" => "15 tahun di administrasi pendidikan",
                "keahlian" => "Manajemen dokumen, komunikasi",
                "prestasi" => "Pegawai teladan 2023",
                "contact" => "arifnura@google.com",
                "pendidikan" => "S1 Administrasi Negara",
                "gender" => "Laki-laki",
                "asal" => "Malang",
                "image" => "tendik1.png"
            ],
            [
                "name" => "Ust. Fandy Z",
                "nip" => "19870523 200703 2 005",
                "jabatan" => "Bendahara",
                "pengalaman" => "12 tahun pengelolaan keuangan lembaga",
                "keahlian" => "Akuntansi, Excel, perpajakan",
                "prestasi" => "Pengelola Dana BOS terbaik 2022",
                "contact" => "fandyz@google.com",
                "pendidikan" => "S1 Akuntansi",
                "gender" => "Laki-laki",
                "asal" => "Malang",
                "image" => "tendik2.png"
            ],
            // Lanjutkan untuk data tendik lainnya...
        ];

        // Mengirim data ke view
        return view('tendik', ['tendikList' => $tendikList]);
    }
}
