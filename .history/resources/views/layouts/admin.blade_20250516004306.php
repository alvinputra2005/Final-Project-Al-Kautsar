<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PPM Al Kautsar</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('img/logoppm.jpeg') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Sidebar tetap di kiri dan tidak ikut bergulir */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            background-color: #006699;
            color: white;
            width: 220px;
            height: 100vh;
            padding-top: 20px;
            overflow-y: auto; /* Membuat sidebar bisa digulir jika kontennya melebihi */
            z-index: 100;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #004466;
        }

        /* Content area mulai setelah sidebar */
        .content-area {
            margin-left: 240px; /* Memberikan ruang untuk sidebar */
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
            margin-bottom: 20px;
        }

        .logo-pondok {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }

        .dashboard-info {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .dashboard-info .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 30%;
            text-align: center;
        }

        .dashboard-info .card h3 {
            color: #006699;
            font-weight: bold;
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
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.ulasan.index') }}" class="{{ request()->routeIs('admin.ulasan.index') ? 'active' : '' }}">Ulasan</a>
            <a href="{{ route('admin.alumnis.index') }}" class="{{ request()->routeIs('admin.alumnis.index') ? 'active' : '' }}">Alumnis</a>
        </div>

        <!-- Content Area -->
        <div class="content-area w-100">
            <div class="header">
                <h2>Dashboard Admin</h2>
                <button class="btn btn-danger">Logout</button>
            </div>
            
            <!-- Content yang diganti per halaman -->
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
