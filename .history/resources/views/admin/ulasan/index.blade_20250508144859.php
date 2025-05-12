<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Ulasan - PPM Al Kautsar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f8fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .header {
            background: linear-gradient(to right, #006699, #004466);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
        }

        .table thead {
            background-color: #006699;
            color: white;
        }

        .table td {
            vertical-align: middle;
        }

        .btn-primary {
            background-color: #006699;
            border-color: #005577;
        }

        .btn-primary:hover {
            background-color: #005577;
            border-color: #004466;
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="header">
        <h2>Manajemen Ulasan</h2>
        <p>PPM Al Kautsar - Kuliah nomor 1, Mondok nomor 1</p>
    </div>

    <!-- Pesan sukses setelah operasi -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel Ulasan -->
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover shadow-sm">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Rating</th>
                    <th>Ulasan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ulasan as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ str_repeat("⭐", $item->rating) }}</td>
                        <td>{{ $item->ulasan }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.ulasan.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.ulasan.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
