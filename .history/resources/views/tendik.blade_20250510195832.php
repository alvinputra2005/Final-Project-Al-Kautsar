<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tenaga Kependidikan PPM Al Kautsar</title>
  <style>
    /* Include your CSS styles here */
  </style>
</head>
<body>

<header class="title-section">  
  <div class="header-left">
    <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar">
    <h1>Tenaga Kependidikan PPM Al Kautsar</h1>
  </div>
  <a href="{{ url('home') }}#statistik" class="back-button">&larr; Kembali ke Beranda Utama</a>
</header>

<main>
  <div class="grid-container">
    @foreach ($tendikList as $index => $tendik)
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="card-number">{{ $index + 1 }}</div>
          <div class="card-image-wrapper">
            <img src="{{ asset('img/' . $tendik['image']) }}" alt="{{ $tendik['name'] }}" class="card-img">
          </div>
          <div class="card-text">
            <h3>{{ $tendik['name'] }}</h3>
            <p>{{ $tendik['asal'] }}</p>
          </div>
          <button class="flip-btn">Biodata Selengkapnya</button>
        </div>
        <div class="flip-card-back">
          <h3>{{ $tendik['name'] }}</h3>
          <ul>
            <li><strong>NIP:</strong> {{ $tendik['nip'] }}</li>
            <li><strong>Jabatan:</strong> {{ $tendik['jabatan'] }}</li>
            <li><strong>Pengalaman:</strong> {{ $tendik['pengalaman'] }}</li>
            <li><strong>Keahlian:</strong> {{ $tendik['keahlian'] }}</li>
            <li><strong>Prestasi:</strong> {{ $tendik['prestasi'] }}</li>
            <li><strong>Kontak:</strong> {{ $tendik['contact'] }}</li>
            <li><strong>Pendidikan:</strong> {{ $tendik['pendidikan'] }}</li>
            <li><strong>Jenis Kelamin:</strong> {{ $tendik['gender'] }}</li>
            <li><strong>Asal:</strong> {{ $tendik['asal'] }}</li>
          </ul>
          <button class="flip-back-btn">← Kembali</button>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="photo-section">
    <div class="photo-wrapper">
      <h2 class="photo-title">Asisten Tendik PPM Al Kautsar</h2>
      <img src="{{ asset('img/tendik.jpg') }}" alt="Foto Bersama Tendik">
    </div>
  </div>

</main>

<script>
  const cards = document.querySelectorAll('.flip-card');
  
  cards.forEach(card => {
    const inner = card.querySelector('.flip-card-inner');
    const flipBtn = card.querySelector('.flip-btn');
    const backBtn = card.querySelector('.flip-back-btn');

    flipBtn.addEventListener('click', () => inner.style.transform = 'rotateY(180deg)');
    backBtn.addEventListener('click', () => inner.style.transform = 'rotateY(0deg)');
  });
</script>

<footer>
  <div class="container">
    <p>&copy; 2025 PPM Al Kautsar. All rights reserved. | Developed by Meownyala Team</p>
  </
