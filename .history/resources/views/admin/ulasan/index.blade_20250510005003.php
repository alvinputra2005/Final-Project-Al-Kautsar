<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin PPM Al Kautsar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            background-color: #006699;
            color: white;
            padding-top: 20px;
            height: 100vh;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #004466;
        }

        .content-area {
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, #006699, #004466);
            color: white;
            padding: 20px;
            border-radius: 8px;
        }

        .logo-pondok {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="text-center">
                <img src="{{ asset('img/logoppm.jpeg') }}" class="logo-pondok" alt="Logo PPM Al Kautsar">
                <h4>PPM Al Kautsar</h4>
            </div>
            <a href="#" id="ulasan-tab">Ulasan</a>
            <a href="#" id="alumni-tab">Alumnis</a>
        </div>

        <!-- Content Area -->
        <div class="content-area w-100">
            <div class="header">
                <h2>Dashboard Admin</h2>
                <button class="btn btn-danger">Logout</button>
            </div>
            
            <!-- Content will be injected here -->
            <div id="content">
                <!-- Tampilkan halaman awal di sini -->
                <h3>Selamat datang di Dashboard Admin</h3>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Menampilkan halaman Ulasan ketika admin klik Ulasan
        document.getElementById("ulasan-tab").addEventListener("click", function() {
            // Menampilkan konten Ulasan
            document.getElementById("content").innerHTML = `
                <h3>Manajemen Ulasan</h3>
                <a href="{{ route('admin.ulasan.index') }}" class="btn btn-primary">Lihat Ulasan</a>
            `;
        });

        // Menampilkan halaman Alumni ketika admin klik Alumni
        document.getElementById("alumni-tab").addEventListener("click", function() {
            // Menampilkan konten Alumni
            document.getElementById("content").innerHTML = `
                <h3>Daftar Alumni</h3>
                <a href="{{ route('admin.alumni.index') }}" class="btn btn-primary">Lihat Alumni</a>
            `;
        });
    </script>
</body>
</html>
