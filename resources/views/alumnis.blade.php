    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Daftar Alumni - PPM Al Kautsar</title>
        <link rel="icon" type="image/jpeg" href="{{ url('img/logoppm.jpeg') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        .table thead {
            background-color: #193155;
            color: white;
        }

        .header {
            background: linear-gradient(90deg, #193155, #0d6efd);
            color: white;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
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
            min-width: 1200px;
        }

        .table-responsive {
            overflow-x: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .title-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px;
            background: linear-gradient(to right, #083d77, #0d6efd);
            color: white;
            flex-wrap: wrap;
            gap: 20px;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-left img {
            height: 60px;
            object-fit: contain;
            border-radius: 12px;
        }

        .header-left h1 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: bold;
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
            position: relative;
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
        .pagination .page-item .page-link {
        background-color: #1e90ff;
        color: white;
        border: none;
        margin: 0 4px;
        border-radius: 8px;
        padding: 8px 14px;
        font-weight: bold;
        transition: 0.3s ease;
    }

    .pagination .page-item .page-link:hover {
        background-color: #0d6efd;
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
    }

    .pagination .page-item.active .page-link {
        background-color: #004a99;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .pagination .page-item.disabled .page-link {
        background-color: #cfd8dc;
        color: #607d8b;
        cursor: not-allowed;
    }

        }
    </style>
    </head>
    <body>
    <header class="title-section">  
    <div class="header-left">
        <img src="{{ url('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar">
        <h1>Daftar Alumni PPM Al Kautsar</h1>
    </div>
    <a href="{{ url('home') }}#statistik" class="back-button">&larr; Kembali ke Beranda Utama</a>
    </header>

    <div class="container mt-5">
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

        <!-- Pagination -->
        <div class="mt-4 d-flex justify-content-center">
            {{ $alumni->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <footer class="footer text-center mt-5 py-3">
        <p>&copy; 2025 PPM Al Kautsar. All rights reserved. | Developed by Meownyala Team</p>
    </footer>

    </body>
    </html>