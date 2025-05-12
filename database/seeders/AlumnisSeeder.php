<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumnis;

class AlumnisSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data default jika diperlukan
        Alumnis::create([
            'nama' => 'John Doe',
            'jenis_kelamin' => 'Laki-laki',
            'kampus' => 'Universitas Indonesia',
            'angkatan' => '2020',
            'pekerjaan' => 'Software Engineer',
            'bidang_keahlian' => 'Pemrograman',
            'pengalaman' => '3 tahun pengalaman di bidang TI',
            'asal' => 'Jakarta',
            'contact' => '08123456789',
            'riwayat_pendidikan' => 'S1 Teknik Informatika',
        ]);
    }
}