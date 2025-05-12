<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin PPM Al Kautsar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <div id="content"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("ulasan-tab").addEventListener("click", function() {
            document.getElementById("content").innerHTML = `
                <h3>Manajemen Ulasan</h3>
                <!-- Insert Ulasan Table Here -->
                @include('admin.ulasan.index')
            `;
        });

        document.getElementById("alumni-tab").addEventListener("click", function() {
            document.getElementById("content").innerHTML = `
                <h3>Daftar Alumni</h3>
                <!-- Insert Alumni Table Here -->
                @include('admin.alumni.index')
            `;
        });
    </script>
</body>
</html>
