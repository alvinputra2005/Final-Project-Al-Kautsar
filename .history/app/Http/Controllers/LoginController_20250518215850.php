<?php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // kode di sini
}

    public function showLoginForm()
    {
        return view('auth.login'); // Sesuaikan dengan path view login kamu
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // Cek apakah username ada di database
        $user = \App\Models\User::where('username', $credentials['username'])->first();
        if (!$user) {
            return back()->withErrors(['username' => 'Username tidak ditemukan'])->withInput();
        }

        // Coba login dengan Auth
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        // Kalau gagal login, password salah (karena username sudah dicek)
        return back()->withErrors(['password' => 'Password salah'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
