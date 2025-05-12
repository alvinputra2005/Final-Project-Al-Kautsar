<!-- resources/views/home/alumnis.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Alumni - PPM Al Kautsar</title>
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

        .btn-outline-primary {
            border-color: #006699;
            color: #006699;
        }

        .btn-outline-primary:hover {
            background-color: #006699;
            color: white;
        }

        .logo-pondok {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 102, 153, 0.3);
            background-color: white;
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="header text-center">
        <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar" class="logo-pondok" id="hidden-button">

        <h2 class="mt-3">Daftar Alumni PPM Al Kautsar</h2>
        <p>Informasi alumni yang terdaftar di PPM Al Kautsar</p>
    </div>

    <!-- Tabel Alumni -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow bg-white">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kampus</th>
                    <th>Angkatan</th>
                    <th>Pekerjaan</th>
                    <th>Bidang Keahlian</th>
                    <th>Pengalaman</th>
                    <th>Asal</th>
                    <th>Kontak</th>
                    <th>Riwayat Pendidikan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumni as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->kampus }}</td>
                        <td>{{ $item->angkatan }}</td>
                        <td>{{ $item->pekerjaan }}</td>
                        <td>{{ $item->bidang_keahlian }}</td>
                        <td>{{ $item->pengalaman }}</td>
                        <td>{{ $item->asal }}</td>
                        <td>{{ $item->contact }}</td>
                        <td>{{ $item->riwayat_pendidikan }}</td>
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