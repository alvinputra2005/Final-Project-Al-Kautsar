<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PPM Al Kautsar</title>
    <link rel="icon" type="image/jpeg" href="{{ url('img/logoppm.jpeg') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            background-color: #006699;
            color: white;
            width: 230px;
            height: 100vh;
            padding-top: 20px;
            overflow-y: auto;
            z-index: 100;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar .text-center h4 {
            font-weight: bold;
            margin-top: 10px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #00557a;
        }

        .sidebar a.active {
            background-color: #004466;
            font-weight: bold;
        }

        .logo-pondok {
            width: 65px;
            height: 65px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
            box-shadow: 0 0 6px rgba(255,255,255,0.4);
        }

        .content-area {
            margin-left: 240px;
            padding: 25px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, #006699, #004466);
            color: white;
            padding: 20px 30px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .header h2 {
            font-weight: bold;
            margin: 0;
        }

        .dashboard-info {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .dashboard-info .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 300px;
            text-align: center;
            transition: transform 0.2s ease;
        }

        .dashboard-info .card:hover {
            transform: translateY(-5px);
        }

        .dashboard-info .card h3 {
            color: #006699;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .dashboard-info .card p {
            margin: 0;
            color: #555;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding: 10px 0;
            }

            .content-area {
                margin-left: 0;
                padding: 15px;
            }

            .sidebar a {
                padding: 10px 15px;
            }

            .dashboard-info {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="d-flex flex-wrap">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="text-center">
                <img src="{{ url('img/logoppm.jpeg') }}" class="logo-pondok" alt="Logo PPM Al Kautsar">
                <h4>PPM Al Kautsar</h4>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fas fa-home"></i> Dashboard
            </a>
            <a href="{{ route('admin.ulasan.index') }}" class="{{ request()->routeIs('admin.ulasan.index') ? 'active' : '' }}">
                <i class="fas fa-comments"></i> Ulasan
            </a>
            <a href="{{ route('admin.alumnis.index') }}" class="{{ request()->routeIs('admin.alumnis.index') ? 'active' : '' }}">
                <i class="fas fa-user-graduate"></i> Alumnis
            </a>
        </div>

        <!-- Content Area -->
        <div class="content-area w-100">
            <div class="header">
                <h2><i class="fas fa-user-cog mr-2"></i> Dashboard Admin</h2>
                <form action="{{ route('logout') }}" method="POST" class="mb-0">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>

            <!-- Dynamic Page Content -->
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
