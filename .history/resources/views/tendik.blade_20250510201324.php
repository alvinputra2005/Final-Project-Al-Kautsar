<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tenaga Kependidikan PPM Al Kautsar</title>
</head>
<body>

    <style>
body {
    font-family: 'Georgia', serif;
    margin: 0;
    background-color: #f2f5f9;
    color: #333;
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
  
  .card-number {
    position: absolute;
    top: 10px;
    left: 12px;
    background-color: #003366;
    color: white;
    font-size: 0.85rem;
    font-weight: bold;
    padding: 4px 8px;
    border-radius: 6px;
    z-index: 2;
  }
  .flip-card-front {
    position: relative;
  }
  
  .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 24px;
    padding: 40px;
    justify-items: center;
  }
  
  .flip-card {
    background-color: transparent;
    width: 250px;
    height: 420px;
    perspective: 1000px;
  }
  
  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.6s;
    transform-style: preserve-3d;
  }
  
  .flip-card-front,
  .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 12px;
    background-color: white;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    padding: 20px;
    box-sizing: border-box;
    overflow-y: auto;
  }
  
  .flip-card-front {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

.flip-card-front img {
  width: 100%;
  height: 160px;
  object-fit: cover;
  border-radius: 12px 12px 0 0;
  margin-bottom: 10px;
}
  
  .flip-card-front h3 {
    margin: 10px 0 5px;
    font-size: 1.1rem;
    color: #0c3c78;
    text-align: center;
  }
  
  .flip-card-front p {
    font-size: 0.9rem;
    color: #555;
    text-align: center;
  }
  
  .flip-card-front .flip-btn,
  .flip-card-back .flip-back-btn {
    margin-top: 15px;
    background-color: #0c3c78;
    color: white;
    border: none;
    padding: 6px 12px;
    font-size: 0.85rem;
    cursor: pointer;
    border-radius: 6px;
  }
  
  .flip-card-back {
    transform: rotateY(180deg);
  }
  
  .flip-card-back h3 {
    margin-bottom: 10px;
    font-size: 1.1rem;
    color: #0c3c78;
  }
  
  .flip-card-back ul {
    padding-left: 16px;
    margin: 0;
    font-size: 0.85rem;
    line-height: 1.4;
  }
  
  .flip-card-back ul li {
    margin-bottom: 6px;
  }

  .photo-section {
    display: flex;
    justify-content: center;
    margin: 40px 0;
  }
  
  .photo-section img {
    max-width: 90%;
    height: auto;
    border-radius: 16px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }
  
  .photo-section img:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
  }

  .photo-wrapper {
    text-align: center;
  }
  
  .photo-title {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #003366;
    font-weight: bold;
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
            <img src="{{ asset('img/tendik1.png') }}" alt="{{ $tendik['name'] }}" class="card-img">
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
      <img src="{{ asset('/img/tendik.jpg') }}" alt="Foto Bersama Tendik">
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
    <p>&copy; 2025 PPM Al Kautsar. Semua hak cipta dilindungi. | Dikembangkan oleh Tim Meownyala</p>
  </div>
</footer>

</body>
</html>