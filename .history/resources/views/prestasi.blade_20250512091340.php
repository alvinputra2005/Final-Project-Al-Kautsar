<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prestasi PPM Al Kautsar</title>
  <link href="https://fonts.googleapis.com/css2?family=Georgia&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Georgia', serif;
      background: url('{{ asset("img/background.jpg") }}') no-repeat center center;
      background-size: cover;
      color: #333;
    }

    .header {
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
      border-radius: 12px;
    }

    .header-left h1 {
      margin: 0;
      font-size: 1.8rem;
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

    .prestasi-section {
      padding: 40px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 24px;
    }

    .prestasi-card {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(22, 44, 154, 0.1);
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .prestasi-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    .prestasi-card h3 {
      margin-top: 0;
      color: #003366;
      font-size: 1.2rem;
    }

    .prestasi-card p {
      font-size: 0.95rem;
      line-height: 1.5;
    }

    /* Prestasi besar */
    .prestasi-card.large {
      grid-column: span 2;
      background: linear-gradient(135deg,rgb(1, 36, 88), #1c7ed6);
      color: white;
    }

    .prestasi-card.large h3,
    .prestasi-card.large p {
      color: white;
    }

    .card-image img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 12px;
    }

    .card-border {
      border-left: 6px solid #0d6efd;
      background-color: #e9f0ff;
    }

    .card-icon {
      display: flex;
      align-items: flex-start;
      gap: 15px;
      background-color: #fff;
    }

    .card-icon .icon {
      font-size: 2rem;
      padding-top: 5px;
    }

    .photo-only img {
      width: 100%;
      border-radius: 12px;
      height: auto;
      object-fit: cover;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      transition: transform 0.3s ease;
    }

    .photo-only img:hover {
      transform: scale(1.03);
    }

    /* FOOTER */
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

  <!-- HEADER -->
  <div class="header">
    <div class="header-left">
      <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo">
      <h1>Prestasi PPM Al Kautsar</h1>
    </div>
    <a href="{{ route('home') }}" class="back-button">&larr; Kembali ke Beranda Utama</a>
  </div>

  <!-- PRESTASI SECTION -->
  <section class="prestasi-section">
    <!-- Card besar -->
    <div class="prestasi-card large">
      <h3>Juara 1 Lomba Karya Tulis Ilmiah Nasional</h3>
      <p>Pada ajang Lomba Karya Tulis Ilmiah (LKTI) Nasional 2025 yang diselenggarakan oleh Universitas Gadjah Mada, sebuah prestasi gemilang tercatat dalam sejarah Pondok Pesantren Modern (PPM) Al Kautsar. Santri-santri dari PPM Al Kautsar dengan penuh semangat dan tekad berhasil meraih Juara 1 dalam kompetisi bergengsi ini, membawa pulang kemenangan yang tak hanya membanggakan mereka pribadi, tetapi juga seluruh komunitas pesantren.

Tema yang diangkat dalam karya ilmiah tersebut adalah "Inovasi Pendidikan Pesantren", sebuah topik yang sangat relevan dengan visi PPM Al Kautsar untuk terus mengembangkan pendidikan pesantren yang tidak hanya berbasis agama, tetapi juga mampu bersaing dengan pendidikan modern. Dengan mengusung ide-ide cemerlang dan solusi kreatif untuk meningkatkan kualitas pendidikan di pesantren, tim dari PPM Al Kautsar mampu memukau dewan juri dan mendapatkan pengakuan yang layak.

Mereka tidak hanya mengandalkan pengetahuan agama yang mendalam, tetapi juga memanfaatkan perkembangan teknologi dan metodologi terbaru untuk menyajikan sebuah inovasi yang tidak hanya membawa dampak positif bagi pesantren, tetapi juga untuk dunia pendidikan secara umum. Keberhasilan mereka tidak lepas dari upaya keras, dedikasi, dan bimbingan yang intensif dari para pembina yang selalu mendukung dan memberikan dorongan untuk menjadi yang terbaik.</p>
    </div>

    <!-- Card biasa -->
    <div class="prestasi-card">
      <h3>Juara 2 MHQ Tingkat Kabupaten</h3>
      <p>Muhammad Iqbal meraih peringkat kedua dalam Musabaqah Hifdzil Qur’an tingkat Kabupaten Tulungagung.</p>
    </div>

    <!-- Card dengan gambar besar -->
    <div class="prestasi-card card-image">
      <img src="{{ asset('img/kg1.jpg') }}" alt="Trophy">
      <h3>Juara 3 Futsal Pesantren Jatim</h3>
      <p>Tim futsal santri PPM Al Kautsar sukses meraih juara 3 di ajang turnamen antar pesantren se-Jawa Timur.</p>
    </div>

    <!-- Card biasa -->
    <div class="prestasi-card">
      <h3>Finalis Olimpiade Sains Provinsi</h3>
      <p>Tim IPA PPM Al Kautsar berhasil melaju hingga babak final dalam ajang Olimpiade Sains tingkat Provinsi Jawa Timur tahun 2024. Prestasi ini merupakan hasil dari kerja keras, bimbingan intensif dari para pembina, serta semangat belajar yang tinggi dari para santri. Dalam kompetisi ini, mereka bersaing dengan ratusan peserta dari berbagai sekolah dan pondok pesantren lainnya di Jawa Timur. Keberhasilan ini menjadi bukti bahwa integrasi antara ilmu agama dan sains modern dapat menghasilkan santri yang unggul dan kompetitif di tingkat regional. Tim IPA PPM Al Kautsar membawa nama baik pondok dengan semangat juang yang luar biasa dan etika yang menjunjung tinggi nilai-nilai Islam.</p>
    </div>

    <div class="prestasi-card">
      <h3>Juara 2 Pidato Bahasa Inggris</h3>
      <p>Santri Al Kautsar berhasil meraih juara kedua dalam ajang kompetisi pidato Bahasa Inggris tingkat provinsi yang diselenggarakan oleh Dinas Pendidikan. Prestasi ini menunjukkan kemampuan berbahasa asing yang baik, kepercayaan diri yang tinggi, serta persiapan yang matang dari santri dalam menghadapi persaingan yang ketat antar peserta dari berbagai daerah. Pencapaian ini diharapkan dapat menjadi motivasi bagi santri lainnya untuk terus mengembangkan kemampuan berbicara di depan umum dan memperluas wawasan global.</p>
    </div>

    <!-- Card besar -->
    <div class="prestasi-card large">
      <h3>Santri Teladan Nasional 2024</h3>
      <p>Pada ajang Lomba Karya Tulis Ilmiah (LKTI) Nasional 2025 yang diselenggarakan oleh Universitas Gadjah Mada, sebuah prestasi gemilang tercatat dalam sejarah Pondok Pesantren Modern (PPM) Al Kautsar. Santri-santri dari PPM Al Kautsar dengan penuh semangat dan tekad berhasil meraih Juara 1 dalam kompetisi bergengsi ini, membawa pulang kemenangan yang tak hanya membanggakan mereka pribadi, tetapi juga seluruh komunitas pesantren. Tema yang diangkat dalam karya ilmiah tersebut adalah "Inovasi Pendidikan Pesantren", sebuah topik yang sangat relevan dengan visi PPM Al Kautsar untuk terus mengembangkan pendidikan pesantren yang tidak hanya berbasis agama, tetapi juga mampu bersaing dengan pendidikan modern. Dengan mengusung ide-ide cemerlang dan solusi kreatif untuk meningkatkan kualitas pendidikan di pesantren, tim dari PPM Al Kautsar mampu memukau dewan juri dan mendapatkan pengakuan yang layak. Mereka tidak hanya mengandalkan pengetahuan agama yang mendalam, tetapi juga memanfaatkan perkembangan teknologi dan metodologi terbaru untuk menyajikan sebuah inovasi yang tidak hanya membawa dampak positif bagi pesantren, tetapi juga untuk dunia pendidikan secara umum. Keberhasilan mereka tidak lepas dari upaya keras, dedikasi, dan bimbingan yang intensif dari para pembina yang selalu mendukung dan memberikan dorongan untuk menjadi yang terbaik.</p>
    </div>

    <!-- Card gaya border kiri -->
    <div class="prestasi-card card-border">
      <h3>Juara Desain Poster Hari Santri</h3>
      <p>Desain karya santri Alif Ramadhan digunakan oleh PCNU sebagai poster resmi Hari Santri 2024.</p>
    </div>

    <!-- Card dengan ikon -->
    <div class="prestasi-card card-icon">
      <div class="icon">🏆</div>
      <div>
        <h3>Runner-up Lomba Debat Bahasa Arab</h3>
        <p>Santri kelas 11 meraih peringkat kedua dalam lomba debat Bahasa Arab tingkat provinsi.</p>
      </div>
    </div>
    
    <!-- Card hanya gambar -->
    <div class="prestasi-card photo-only">
      <img src="{{ asset('img/kg2.jpg') }}" alt="Prestasi Medali">
    </div>

    <div class="prestasi-card photo-only">
      <img src="{{ asset('img/kg4.jpg') }}" alt="Santri Juara">
    </div>

    <!-- Card gambar dan teks -->
    <div class="prestasi-card card-image">
      <img src="{{ asset('img/kg3.jpg') }}" alt="Team">
      <h3>Best Team Spirit – Pesantren Competition</h3>
      <p>PPM Al Kautsar mendapatkan penghargaan Best Team Spirit pada kompetisi antar pesantren Jawa Timur.</p>
    </div>

    <!-- Card besar -->
    <div class="prestasi-card large">
      <h3>Best Innovation in Islamic Education 2025</h3>
      <p>Pondok Pesantren Al Kautsar menerima penghargaan nasional bergengsi dalam ajang “Best Innovation in Islamic Education 2025” atas kontribusinya dalam mengembangkan metode pembelajaran kitab kuning berbasis digital. Inovasi ini menggabungkan teknologi modern dengan nilai-nilai tradisional pesantren, sehingga memudahkan santri dalam memahami isi kitab secara mendalam dan interaktif. Penghargaan ini menjadi bukti nyata bahwa pesantren mampu beradaptasi dengan perkembangan zaman tanpa meninggalkan esensi keilmuannya, serta menjadi inspirasi bagi lembaga pendidikan Islam lainnya di Indonesia.</p>
    </div>

    <!-- Card dengan ikon -->
    <div class="prestasi-card card-icon">
      <div class="icon">🎨</div>
      <div>
        <h3>Juara 1 Lomba Kaligrafi</h3>
        <p>Santri Yasin Habibi menjadi juara pertama lomba kaligrafi tingkat Jawa Timur tahun 2025.</p>
      </div>
    </div>

    <!-- Card border kiri -->
    <div class="prestasi-card card-border">
      <h3>Finalis Lomba Vlog Pesantren</h3>
      <p>Video dokumenter santri Al Kautsar masuk final 10 besar nasional dalam lomba vlog Hari Santri.</p>
    </div>

    <!-- Card hanya gambar -->
    <div class="prestasi-card photo-only">
      <img src="{{ asset('img/kg5.jpg') }}" alt="Award">
    </div>

  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
       <p>&copy; 2025 PPM Al Kautsar. All rights reserved. | Developed by Meownyala Team</p>
    </div>
  </footer>

</body>
</html>
