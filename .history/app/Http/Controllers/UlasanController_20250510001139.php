use App\Http\Controllers\UlasanController;

// Rute untuk Menampilkan Daftar Ulasan untuk Pengguna
Route::get('home/ulasan', [UlasanController::class, 'index2'])->name('ulasan.index');

// Rute untuk Menambah Ulasan (Pengguna)
Route::get('home/ulasan/create', [UlasanController::class, 'create'])->name('ulasan.create');  // Rute ini untuk form tambah ulasan oleh pengguna
Route::post('ulasan', [UlasanController::class, 'store'])->name('ulasan.store');

// Rute untuk Admin - Menampilkan Daftar Ulasan
Route::get('admin/ulasan', [UlasanController::class, 'index'])->name('admin.ulasan.index');

// Rute untuk Admin - Mengedit Ulasan
Route::get('admin/ulasan/{id}/edit', [UlasanController::class, 'edit'])->name('admin.ulasan.edit');
Route::put('admin/ulasan/{id}', [UlasanController::class, 'update'])->name('admin.ulasan.update');

// Rute untuk Admin - Menghapus Ulasan
Route::delete('admin/ulasan/{id}', [UlasanController::class, 'destroy'])->name('admin.ulasan.destroy');
