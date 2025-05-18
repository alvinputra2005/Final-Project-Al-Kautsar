<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Tampilkan halaman login
    public function showLoginForm()
    {
        return view('login'); // login.blade.php di resources/views
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect()->intended('/dashboard'); // Ganti sesuai route tujuan
        }

        // Jika gagal login
        return back()->withErrors([
            'username' => 'Username atau password salah!',
        ])->withInput();
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}