<!-- resources/views/admin/alumnis/index.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Alumni - Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Alumni</h2>

        <!-- Menampilkan notifikasi jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.alumnis.create') }}" class="btn btn-primary mb-4">Tambah Alumni</a>

        <!-- Tabel Alumni -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow bg-white">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kampus</th>
                        <th>Angkatan</th>
                        <th>Pekerjaan</th>
                        <th>Bidang Keahlian</th>
                        <th>Pengalaman</th>
                        <th>Kontak</th>
                        <th>Riwayat Pendidikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumni as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kampus }}</td>
                            <td>{{ $item->angkatan }}</td>
                            <td>{{ $item->pekerjaan }}</td>
                            <td>{{ $item->bidang_keahlian }}</td>
                            <td>{{ $item->pengalaman }}</td>
                            <td>{{ $item->contact }}</td>
                            <td>{{ $item->riwayat_pendidikan }}</td>
                            <td>
                                <a href="{{ route('admin.alumnis.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.alumnis.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
