<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogoutIfNotAdminArea
{

    public function handle($request, Closure $next)
{
    // Cek apakah route prefix bukan 'admin'
    if (!$request->is('admin/*')) {
        // Kalau bukan di admin, logout user
        auth()->logout();
        // Hapus session supaya pasti logout
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    return $next($request);
}
}
