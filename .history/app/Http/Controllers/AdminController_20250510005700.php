namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan daftar ulasan untuk admin
    public function index()
    {
        $ulasan = Ulasan::all();  // Ambil semua ulasan untuk ditampilkan ke admin
        return view('admin.ulasan.index', compact('ulasan'));  // Tampilkan ulasan untuk admin
    }

    // Menampilkan form untuk edit ulasan (Admin)
    public function edit($id)
    {
        $ulasan = Ulasan::findOrFail($id);  // Ambil data ulasan berdasarkan ID
        return view('admin.ulasan.edit', compact('ulasan'));  // Tampilkan form edit
    }

    // Memperbarui data ulasan (Admin)
    public function update(Request $request, $id)
    {
        $ulasan = Ulasan::findOrFail($id);  // Ambil ulasan berdasarkan ID

        // Validasi data ulasan yang diperbarui
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required|string',
        ]);
        
        // Memperbarui data ulasan
        $ulasan->update($validated);

        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil diperbarui');
    }

    // Menghapus ulasan (Admin)
    public function destroy($id)
    {
        Ulasan::destroy($id);  // Menghapus ulasan berdasarkan ID
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil dihapus');
    }
}
