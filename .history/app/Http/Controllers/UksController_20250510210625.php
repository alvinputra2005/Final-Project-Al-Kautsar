<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UksController extends Controller
{
    // Method untuk menampilkan halaman Uks
    public function index()
    {
        return view('uks'); // Menampilkan view uks.blade.php
    }
}
