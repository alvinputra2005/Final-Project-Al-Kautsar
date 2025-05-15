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
        }

        /* Sidebar */
        .sidebar {
            background-color: #006699;
            color: white;
            padding-top: 20px;
            height: 100vh;
            position: fixed;
            width: 250px;
            transition: 0.3s;
        }

        .sidebar.shrink {
            width: 70px;
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

        /* Sidebar Logo */
        .logo-pondok {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
            transition: 0.3s;
        }

        .sidebar.shrink .logo-pondok {
            width: 40px;
            height: 40px;
        }

        /* Hamburger menu */
        .menu-toggle {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 30px;
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
        }

        .content-area {
            margin-left: 250px;
            padding: 20px;
            transition: 0.3s;
        }

        .content-area.shrink {
            margin-left: 70px;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, #006699, #004466);
            color: white;
            padding: 20px;
            border-radius: 8px;
        }

        /* Dashboard Info */
        .dashboard-info {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .dashboard-info .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
            <a href="{{ route('admin.ulasan.index') }}">Ulasan</a>
            <a href="{{ route('admin.alumnis.index') }}">Alumnis</a>
        </div>

        <!-- Content Area -->
        <div class="content-area w-100">
            <button class="menu-toggle" onclick="toggleSidebar()">&#9776;</button>
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
    
    <script>
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('shrink');
            document.querySelector('.content-area').classList.toggle('shrink');
        }
    </script>
</body>
</html>
