<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Testimoni - PPM Al Kautsar</title>
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
    <h3 class="text-center mb-4">Edit Testimoni</h3>
    <form action="{{ route('ulasan.update', $ulasan->id) }}" method="POST">
        @csrf
        @method('PUT')  <!-- Menggunakan metode PUT untuk update -->

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $ulasan->nama) }}" required>
        </div>

        <div class="form-group">
            <label for="ulasan">Ulasan</label>
            <textarea name="ulasan" id="ulasan" class="form-control" rows="4" required>{{ old('ulasan', $ulasan->ulasan) }}</textarea>
        </div>

        <div class="form-group">
            <label for="rating">Rating (1-5)</label>
            <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" value="{{ old('rating', $ulasan->rating) }}" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Update</button>
        <a href="{{ route('ulasan.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </form>
  </div>
</div>
</body>
</html>
