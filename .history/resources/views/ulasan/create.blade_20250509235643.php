<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ulasan - PPM Al Kautsar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 40px;
        }

        .form-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,102,153,0.1);
        }

        .form-card h3 {
            color: #006699;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #006699;
            border: none;
        }

        .logo-pondok {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>

<div class="container text-center">
    <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo Pondok" class="logo-pondok">
    <div class="form-card text-left">
        <h3 class="text-center mb-4">Tambah Ulasan</h3>
        <form action="{{ route('ulasan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="rating">Rating (1-5)</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
            </div>

            <div class="form-group">
                <label for="ulasan">Ulasan</label>
                <textarea name="ulasan" id="ulasan" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('home') }}" class="btn btn-secondary btn-block">Kembali ke Beranda</a>
        </form>
    </div>
</div>

</body>
</html>
