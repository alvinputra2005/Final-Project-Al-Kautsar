<!-- resources/views/home/alumnis.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Alumni - PPM Al Kautsar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        .header {
            background: linear-gradient(to right, #006699, #004466);
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
            font-weight: bold;
        }

        .table thead {
            background-color: #006699;
            color: white;
        }

        .table td {
            vertical-align: middle;
        }

        .logo-pondok {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 102, 153, 0.3);
            background-color: white;
            padding: 5px;
            cursor: pointer;
        }

        .logo-pondok:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .btn-outline-primary {
            border-color: #006699;
            color: #006699;
        }

        .btn-outline-primary:hover {
            background-color: #006699;
            color: white;
        }

        .text-left {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar" class="logo-pondok">
        <h2 class="mt-3">Daftar Alumni PPM Al Kautsar</h2>
        <p>PPM Al Kautsar - Kuliah Nomor 1, Mondok Nomor 1</p>
    </div>

    <!-- Tabel Alumni -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow bg-white">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Kampus</th>
                <th>Angkatan</th>
                <th>Bidang Keahlian</th>
                <th>Kontak</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumnis as $alumni)
                <tr>
                    <td>{{ $alumni->nama }}</td>
                    <td>{{ $alumni->kampus }}</td>
                    <td>{{ $alumni->angkatan }}</td>
                    <td>{{ $alumni->bidang_keahlian }}</td>
                    <td>{{ $alumni->contact }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tombol Kembali ke Beranda -->
    <div class="text-left">
        <a href="{{ route('home') }}" class="btn btn-outline-primary">← Kembali ke Beranda</a>
    </div>
</div>

</body>
</html>