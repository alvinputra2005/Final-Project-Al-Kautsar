<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutIfNotAdminArea
{
    public function handle(Request $request, Closure $next)
    {
        // Jika bukan URL admin/*, maka logout user
        if (!$request->is('admin/*')) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $next($request);
    }
}
