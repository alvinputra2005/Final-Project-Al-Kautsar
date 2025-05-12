<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Katalog Santri</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Masukkan CSS yang sudah kamu buat di sini */
  </style>
</head>
<body>

<header class="title-section">  
  <div class="header-left">
    <img src="../img/logoppm.jpeg" alt="Logo PPM Al Kautsar">
    <h1>Galeri Santri Aktif PPM Al Kautsar</h1>
  </div>
  <a href="{{ url('/') }}" class="back-button">&larr; Kembali ke Beranda Utama</a>
</header>

<main>
  <div style="padding: 20px; display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;">
    <select id="filter-campus">
      <option value="all">Semua Kampus</option>
      <option value="UM">UM</option>
      <option value="UB">UB</option>
      <option value="UMM">UMM</option>
    </select>
    <select id="filter-batch">
      <option value="all">Semua Angkatan</option>
      <option value="24">2024</option>
      <option value="23">2023</option>
      <option value="22">2022</option>
      <option value="21">2021</option>
    </select>
  </div>

  <div id="catalog-container" class="catalog-grid"></div>
  <div class="pagination" id="pagination"></div>
</main>

<footer>
  <div class="container">
     <p>&copy; 2025 PPM Al Kautsar. All rights reserved. | Developed by Meownyala Team</p>
  </div>
</footer>

<script src="{{ asset('js/data.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>