<?php
// app/Models/Alumnis.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnis extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'kampus',
        'angkatan',
        'pekerjaan',
        'bidang_keahlian',
        'pengalaman',
        'asal',
        'contact',
        'riwayat_pendidikan',
    ];
}
