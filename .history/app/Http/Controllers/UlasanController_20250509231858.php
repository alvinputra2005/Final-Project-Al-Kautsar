namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // Menampilkan daftar ulasan
    public function index()
    {
        $ulasan = Ulasan::all();
        return view('admin.ulasan.index', compact('ulasan'));
    }

    // Menampilkan form tambah ulasan
    public function create()
    {
        return view('admin.ulasan.create');
    }

    // Menyimpan ulasan baru
    public function store(Request $request)
    {
        Ulasan::create($request->all());
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil ditambahkan');
    }

    // Menampilkan form edit ulasan
    public function edit($id)
    {
        $ulasan = Ulasan::findOrFail($id);
        return view('admin.ulasan.edit', compact('ulasan'));
    }

    // Memperbarui data ulasan
    public function update(Request $request, $id)
    {
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->update($request->all());
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil diperbarui');
    }

    // Menghapus ulasan
    public function destroy($id)
    {
        Ulasan::destroy($id);
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil dihapus');
    }
}
