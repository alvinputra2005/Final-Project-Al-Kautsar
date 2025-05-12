<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ulasan Pengunjung - PPM Al Kautsar</title>
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

        .btn-outline-primary {
            border-color: #006699;
            color: #006699;
        }

        .btn-outline-primary:hover {
            background-color: #006699;
            color: white;
        }

        #hidden-button {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        .logo-pondok:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

    </style>
</head>
<body>

<div class="container">
    <div class="header text-center">
         <a href="{{ route('ulasan.index') }}">
            <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar" class="logo-pondok" id="hidden=button">
         </a>

        <h2 class="mt-3">Ulasan Pengunjung</h2>
        <p>PPM Al Kautsar - Kuliah nomor 1, Mondok nomor 1</p>
    </div>

    <!-- Tabel Ulasan -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow bg-white">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Bintang</th>
                <th>Ulasan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ulasan as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ str_repeat("⭐", $item->rating) }}</td>
                    <td>{{ $item->ulasan }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <!-- Tombol Kembali ke Beranda -->
    <div class="text-left mb-5 ml-4">
        <a href="{{ route('home') }}" class="btn btn-outline-primary">← Kembali ke Beranda</a>
    </div>
</div>

</body>
</html>