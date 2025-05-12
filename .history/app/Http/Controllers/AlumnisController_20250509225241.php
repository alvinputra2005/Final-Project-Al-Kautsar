namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumnisController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();  // Menampilkan semua alumni
        return view('home.alumnis.index', compact('alumnis'));
    }

    public function create()
    {
        return view('home.alumnis.create');  // Menampilkan form tambah alumni
    }

    public function store(Request $request)
    {
        Alumni::create($request->all());  // Menyimpan alumni baru
        return redirect()->route('alumnis.index')->with('success', 'Alumni berhasil ditambahkan');
    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);  // Menampilkan form edit alumni
        return view('home.alumnis.edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());  // Memperbarui alumni
        return redirect()->route('alumnis.index')->with('success', 'Alumni berhasil diperbarui');
    }

    public function destroy($id)
    {
        Alumni::destroy($id);  // Menghapus alumni
        return redirect()->route('alumnis.index')->with('success', 'Alumni berhasil dihapus');
    }
}
