<
namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\Alumnis;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Menampilkan Dashboard Admin
    public function index()
    {
        // Ambil data ulasan dan alumni
        $ulasan = Ulasan::all();  // Ambil semua ulasan
        $alumni = Alumnis::all(); // Ambil semua alumni
    
        // Kirim data ke view dashboard
        return view('admin.index', compact('ulasan', 'alumni'));  // Tampilkan data ke view admin.index
    }

    // Menampilkan daftar ulasan (Admin)
    public function ulasan()
    {
        $ulasan = Ulasan::all();  // Ambil semua data ulasan
        return view('admin.ulasan.index', compact('ulasan'));  // Tampilkan daftar ulasan
    }

    // Menampilkan daftar alumni (Admin)
    public function alumnis()
    {
        $alumni = Alumnis::all();  // Ambil semua data alumni
        return view('admin.alumnis.index', compact('alumni'));  // Tampilkan daftar alumni
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
