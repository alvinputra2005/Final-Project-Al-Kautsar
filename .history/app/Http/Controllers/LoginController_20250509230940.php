namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan Dashboard Admin
    public function dashboard()
    {
        return view('admin.dashboard');  // Menampilkan halaman dashboard admin
    }
}
