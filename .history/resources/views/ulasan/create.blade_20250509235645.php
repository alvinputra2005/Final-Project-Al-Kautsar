<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
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
            box-shadow: 0 4px 12px rgba(0, 102, 153, 0.1);
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

        .btn-secondary {
            background-color: #ccc;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #b3b3b3;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .back-button {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #006699;
            color: white;
            padding: 10px 20px;
            border-radius: 50%;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .back-button:hover {
            background-color: #005480;
            transform: scale(1.1);
        }

        .btn-outline-primary {
            border-color: #006699;
            color: #006699;
        }

        .btn-outline-primary:hover {
            background-color: #006699;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Konten Formulir -->
    <div class="container text-center">
        <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo Pondok" class="logo-pondok" id="logo-pondok">
        <div class="form-card text-left">
            <h3 class="text-center mb-4">Tambah Ulasan</h3>
            <form action="{{ route('ulasan.store') }}" method="POST" onsubmit="return confirmSubmit()">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>

                <div class="form-group">
                    <label for="ulasan">Ulasan</label>
                    <textarea name="ulasan" id="ulasan" class="form-control" rows="4" required>{{ old('ulasan') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="rating">Rating (1-5)</label>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" value="{{ old('rating') }}" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan Ulasan</button>
                <a href="{{ route('home') }}" class="btn btn-secondary btn-block">Batal</a>
            </form>
        </div>
    </div>

    <script>
        function confirmSubmit() {
            return confirm("Pastikan ulasan yang Anda tulis sudah benar?");
        }

        document.getElementById('logo-pondok').addEventListener('click', function() {
            document.getElementById('hidden-button').click();
        });
    </script>
</body>
</html>
