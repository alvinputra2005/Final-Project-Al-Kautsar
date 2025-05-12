<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Halaman Dashboard Admin
    public function dashboard()
    {
        return view('admi');  // Menampilkan dashboard admin
    }
}
