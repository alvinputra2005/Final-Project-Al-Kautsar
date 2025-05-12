<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Alumni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #hidden-button {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Alumni</h2>

        <a href="{{ route('alumnis.create') }}" class="btn btn-primary mb-4">Tambah Alumni</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kampus</th>
                    <th>Angkatan</th>
                    <th>Pekerjaan</th>
                    <th>Bidang Keahlian</th>
                    <th>Pengalaman</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnis as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kampus }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->bidang_keahlian }}</td>
                    <td>{{ $item->pengalaman }}</td>
                    <td>{{ $item->contact }}</td>
                    <td>
                        <!-- Tombol tersembunyi -->
                        <a href="{{ route('alumni.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('alumni.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
