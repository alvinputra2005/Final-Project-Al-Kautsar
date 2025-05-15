<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumnis;
use Faker\Factory as Faker;

class AlumnisSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        $kampusList = ['Universitas Negeri Malang (UM)', 'Universitas Brawijaya (UB)', 'Politeknik Negeri Malang (Polinema)'];
        $pekerjaanList = [
            'Software Developer', 'Guru', 'Dosen', 'Analis Data', 'IT Support',
            'Digital Marketer', 'UI/UX Designer', 'Teknisi Jaringan', 'Freelancer', 'Wiraswasta'
        ];
        $keahlianList = [
            'Pemrograman', 'Jaringan Komputer', 'Desain Grafis', 'Analisis Data', 'Manajemen Proyek',
            'Keamanan Siber', 'Pengembangan Web', 'UI/UX Design', 'AI & Machine Learning', 'Manajemen Produk'
        ];
        $kotaList = ['Malang', 'Surabaya', 'Blitar', 'Kediri', 'Pasuruan', 'Lumajang', 'Jember', 'Probolinggo', 'Tulungagung', 'Madiun'];

        for ($i = 0; $i < 50; $i++) {
            $keahlian = $faker->randomElement($keahlianList);
            $tahun = $faker->numberBetween(1, 5);
            Alumnis::create([
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'kampus' => $faker->randomElement($kampusList),
                'angkatan' => $faker->numberBetween(2015, 2024),
                'pekerjaan' => $faker->randomElement($pekerjaanList),
                'bidang_keahlian' => $keahlian,
                'pengalaman' => "$tahun tahun pengalaman di bidang $keahlian",
                'asal' => $faker->randomElement($kotaList),
                'contact' => '08' . $faker->numerify('##########'),
                'riwayat_pendidikan' => 'S1 ' . $keahlian,
            ]);
        }
    }
}
