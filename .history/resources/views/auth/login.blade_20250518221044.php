<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - PPM Al Kautsar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
  <style>
    body {
      background: url("{{ asset('img/background.jpg') }}") no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(3px);
    }
    .login-card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
      padding: 40px 30px;
      width: 100%;
      max-width: 400px;
      text-align: center;
    }
    .login-card img.logo {
      width: 100px;
      margin-bottom: 15px;
    }
    .login-title {
      color: #007bff;
      font-weight: bold;
      margin-bottom: 25px;
    }
    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
    }
    .btn-login {
      background-color: #007bff;
      border: none;
    }
    .btn-login:hover {
      background-color: #0056b3;
    }
    .btn-back {
      margin-top: 10px;
      color: #007bff;
      text-decoration: underline;
      background: none;
      border: none;
    }
    .btn-back:hover {
      color: #0056b3;
      text-decoration: none;
    }
    .login-footer {
      margin-top: 20px;
      font-size: 0.9em;
      color: #6c757d;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="login-card">
      <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM" class="logo">
      <h2 class="login-title">Login Admin</h2>

      {{-- Tampilkan notifikasi error manual dari session --}}
      @if (session('error'))
        <div class="alert alert-danger">
          <strong>Login Gagal!</strong><br>
          {{ session('error') }}
        </div>
      @endif

      {{-- Tampilkan error validasi --}}
      @if ($errors->any())
        <div class="alert alert-warning">
          <strong>Terjadi Kesalahan:</strong>
          <ul class="mb-0 text-left">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group text-left">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username"
                 value="{{ old('username') }}" placeholder="Masukkan username" required>
        </div>
        <div class="form-group text-left">
          <label for="password">Kata Sandi</label>
          <input type="password" name="password" class="form-control" id="password"
                 placeholder="Masukkan kata sandi" required>
        </div>
        <button type="submit" class="btn btn-login btn-block text-white">Masuk</button>
      </form>

      <form action="{{ url('home') }}" method="get">
        <button type="submit" class="btn-back">← Kembali ke Beranda</button>
      </form>

      <div class="login-footer">
        &copy; {{ date('Y') }} PPM Al Kautsar
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
