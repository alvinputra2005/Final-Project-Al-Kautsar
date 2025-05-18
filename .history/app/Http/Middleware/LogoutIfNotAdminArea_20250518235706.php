<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogoutIfNotAdminArea
{
    public function handle(Request $request, Closure $next)
    {
        // Kalau bukan halaman admin
        if (!$request->is('admin/*')) {
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        return $next($request);
    }
}
