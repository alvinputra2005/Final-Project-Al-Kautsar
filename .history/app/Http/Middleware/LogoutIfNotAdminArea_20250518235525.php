<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogoutIfNotAdminArea
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Contoh cek jika bukan admin, maka logout
        if (!auth()->check() || !auth()->user()->is_admin) {
            auth()->logout();
            return redirect('/login');
        }

        return $next($request);
    }
}
