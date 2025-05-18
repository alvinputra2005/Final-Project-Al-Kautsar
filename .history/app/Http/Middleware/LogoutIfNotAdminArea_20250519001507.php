use Illuminate\Support\Facades\Auth;

class LogoutIfNotAdminArea
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login')->with('error', 'Hanya admin yang boleh masuk.');
        }

        return $next($request);
    }
}
