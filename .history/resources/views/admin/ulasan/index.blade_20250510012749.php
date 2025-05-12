<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ulasan - PPM Al Kautsar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        .table thead {
            background-color: #006699;
            color: white;
        }

        .table td {
            vertical-align: middle;
        }

        .btn-outline-primary {
            border-color: #006699;
            color: #006699;
        }

        .btn-outline-primary:hover {
            background-color: #006699;
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h2>Manajemen Ulasan</h2>

    <!-- Tabel Ulasan -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow bg-white">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Bintang</th>
                    <th>Ulasan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ulasan as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ str_repeat('⭐', $item->rating) }}</td>
                        <td>{{ $item->ulasan }}</td>
                        <td>
                            <!-- Tombol Edit dan Hapus -->
                            <a href="{{ route('admin.ulasan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.ulasan.destroy', $item->id) }}" method="POST" style="display:inline;">
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
</div>

</body>
</html>
