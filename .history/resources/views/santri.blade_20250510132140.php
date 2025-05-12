<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Katalog Santri</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f6fb;
    }

    .title-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
    background: linear-gradient(to right, #083d77, #0d6efd);
    color: white;
    flex-wrap: wrap;
    gap: 20px;
  }
  
  .header-left {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  
  .header-left img {
    height: 60px;
    object-fit: contain;
    border-radius: 12px;
  }
  
  
  .header-left h1 {
    margin: 0;
    font-size: 1.8rem;
    font-weight: bold;
  }
  
  .back-button {
    background-color: white;
    color: #0d6efd;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    border: 2px solid #0d6efd;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
  }

  .back-button::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, rgba(255,255,255,0.2), rgba(255,255,255,0.4));
    transition: left 0.6s ease;
  }

  .back-button:hover::before {
    left: 100%;
  }

  .back-button:hover {
    background: linear-gradient(to right, #0d6efd, #083d77);
    color: white;
    transform: scale(1.05);
    box-shadow: 0 6px 16px rgba(13, 110, 253, 0.3);
  }
  
    .filters {
      display: flex;
      justify-content: center;
      gap: 10px;
      padding: 1rem;
      flex-wrap: wrap;
    }

    select {
      padding: 6px 10px;
      font-size: 0.95rem;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .catalog-card {
      background: white;
      border-radius: 8px;
      padding: 10px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .catalog-card:hover {
      transform: scale(1.03);
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .catalog-card img {
      width: 100%;
      aspect-ratio: 3 / 4;
      object-fit: cover;
      border-radius: 6px;
    }

    .catalog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 15px;
      padding: 20px;
    }

    .catalog-name {
      margin: 10px 0 5px;
      font-weight: bold;
    }

    .catalog-info {
      font-size: 0.85rem;
      color: #555;
    }

    .pagination {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
      gap: 5px;
    }

    #pagination button {
      background-color: #2196F3;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }

    #pagination button.active {
      background-color: #0b61a4;
    }

    #pagination button:disabled {
      background-color: #b0c4de;
      cursor: not-allowed;
    }

    footer {
    background: linear-gradient(90deg, #193155, #0d6efd);
    color: white;
    padding: 12px 20px;
    text-align: center;
    font-size: 14px;
    margin-top: auto;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
  }
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

<script src="{{ asset('js/data_santri.js') }}"></script>
<script src="{{ asset('js/animasi_santri.js') }}"></script>
</body>
</html>