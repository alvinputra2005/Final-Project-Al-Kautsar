<!-- resources/views/home/alumnis.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Alumni - PPM Al Kautsar</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('img/logoppm.jpeg') }}">
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
    background: linear-gradient(90deg, #193155, #0d6efd);
    color: white;
    padding: 30px;
    border-radius: 12px;
    margin-bottom: 30px;
    text-align: center;
    position: relative; /* penting */
}


    .header h2 {
        margin: 0;
        font-weight: bold;
    }

    .table td, .table th {
        vertical-align: middle;
        white-space: nowrap;
    }

    .table {
        min-width: 1200px; /* agar bisa scroll ke kanan jika sempit */
    }

    .table-responsive {
        overflow-x: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

.back-button {
    background-color: white;
    color: #0d6efd;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    border: 2px solid #0d6efd;
    transition: all 0.4s ease;

    position: absolute;         /* posisi absolut */
    bottom: 20px;               /* jarak dari bawah */
    right: 20px;                /* jarak dari kanan */
    overflow: hidden;
}


  .back-button::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, rgba(255,255,255,0.2), rgba(255,255,255,0.4));
    transition: left 0.6s ease;
  }

  .back-button:hover::before {
    left: 100%;
  }

  .back-button:hover {
    background: linear-gradient(to right, #0d6efd, #083d77);
    color: white;
    transform: scale(1.05);
    box-shadow: 0 6px 16px rgba(13, 110, 253, 0.3);
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
    footer {
    background: linear-gradient(90deg, #193155, #0d6efd);
    color: white;
    padding: 12px 20px;
    text-align: center;
    font-size: 14px;
    margin-top: auto;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
  }
</style>
</head>
<body>

<div class="container mt-5">
    <div class="header text-center">
        <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar" class="logo-pondok" id="hidden-button">
        <h2 class="mt-3">Daftar Alumni PPM Al Kautsar</h2>
        <p>Informasi alumni yang terdaftar di PPM Al Kautsar</p>
        <a href="{{ url('home') }}#statistik" class="back-button">&larr; Kembali ke Beranda Utama</a>
    </div>

    <!-- Tabel Alumni -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-sm bg-white">
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
</div>
<footer class="footer text-center mt-5 py-3">
    <p>&copy; 2025 PPM Al Kautsar. All rights reserved. | Developed by Meownyala Team</p>
</footer>

</body>
</html>