use Illuminate\Support\Facades\Auth;

public function login(Request $request)
{
    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);

    $user = \App\Models\User::where('username', $credentials['username'])->first();
    if (!$user) {
        return back()->withErrors(['username' => 'Username tidak ditemukan'])->withInput();
    }

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // DEBUG: Lihat user yang login
        logger('LOGIN BERHASIL:', ['user' => Auth::user()]);

        return redirect()->intended('/admin/dashboard');
    }

    return back()->withErrors(['password' => 'Password salah'])->withInput();
}
