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
                "image" => "img/tendik1.png"
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
                "image" => "img/tendik2.png"
              ],
              [
                "name" => "Ust. Rio F",
                "nip" => "19890102 201001 1 007",
                "jabatan" => "Operator Dapodik",
                "pengalaman" => "10 tahun sebagai data entry operator",
                "keahlian" => "Dapodik, pendataan, sistem digital",
                "prestasi" => "Inovator sistem pelaporan internal",
                "contact" => "riof@google.com",
                "pendidikan" => "S1 Sistem Informasi",
                "gender" => "Laki-laki",
                "asal" => "Malang",
                "image" => "img/tendik3.png"
              ],
              [
                "name" => "Ust. Sindung",
                "nip" => "19910115 201503 2 009",
                "jabatan" => "Staf Administrasi",
                "pengalaman" => "8 tahun",
                "keahlian" => "Arsip, komunikasi surat-menyurat",
                "prestasi" => "Pegawai Paling Disiplin 2021",
                "contact" => "dewi.ayu@google.com",
                "pendidikan" => "S1 Administrasi Publik",
                "gender" => "Laki-laki",
                "asal" => "Nganjuk",
                "image" => "img/tendik4.png"
              ],
              [
                "name" => "Ust. Tegar",
                "nip" => "19781220 199901 1 003",
                "jabatan" => "Keamanan & Kedisiplinan",
                "pengalaman" => "20 tahun pengawasan kedisiplinan",
                "keahlian" => "Keamanan lingkungan, pendekatan santri",
                "prestasi" => "Satpam Teladan 2020",
                "contact" => "tegargb@google.com",
                "pendidikan" => "SMA",
                "gender" => "Laki-laki",
                "asal" => "Kediri",
                "image" => "img/tendik5.png"
              ],
              [
                "name" => "Ust. Irvan",
                "nip" => "19950310 202001 2 011",
                "jabatan" => "Staf Perpustakaan",
                "pengalaman" => "4 tahun mengelola koleksi buku",
                "keahlian" => "Literasi, manajemen katalog",
                "prestasi" => "Inisiator Digital Library PPM",
                "contact" => "ustirvan@google.com",
                "pendidikan" => "S1 Perpustakaan",
                "gender" => "Laki-laki",
                "asal" => "Malang",
                "image" => "img/tendik6.png"
              ],
              [
                "name" => "Ust. Catur",
                "nip" => "19821129 200603 1 008",
                "jabatan" => "Petugas Asrama",
                "pengalaman" => "13 tahun mendampingi santri",
                "keahlian" => "Pendampingan, konseling santri",
                "prestasi" => "Pengayom Teladan 2019",
                "contact" => "ustcatur@google.com",
                "pendidikan" => "S1 Bimbingan Konseling",
                "gender" => "Laki-laki",
                "asal" => "Lumajang",
                "image" => "images/tendik7.png"
              ]
            ];

        // Mengirim data ke view
        return view('tendik', ['tendikList' => $tendikList]);
    }
}
