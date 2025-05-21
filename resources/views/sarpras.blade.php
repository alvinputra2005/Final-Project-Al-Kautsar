<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SarPras PPM Al-Kautsar</title>
    <link rel="icon" type="image/jpeg" href="{{ url('img/logoppm.jpeg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
<style>
body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
/* Modern Header */
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

  
  
  nav ul {
    display: flex;
    gap: 20px;
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 8px 16px;
    border: 2px solid transparent;
    border-radius: 6px;
    transition: all 0.3s ease;
    font-weight: bold;
  }
  
  /* Hover effect */
  nav ul li a:hover {
    background-color: #fff;
    color: #222;
    border-color: #fff;
  }
  
  
    .hero {
        background: #f4f4f4;
        padding: 60px 20px;
        text-align: center;
    }
    .link-section {
        text-align: center;
        margin: 40px 0;
    }
    .btn {
        background: #007BFF;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
    }
    .infra-page {
        padding: 40px 20px;
    }
    .infra-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    .infra-item {
        border: 1px solid #ccc;
        padding: 20px;
        background: #fafafa;
        text-align: center;
    }
    .infra-item img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        margin-bottom: 15px;
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
    .infra-page {
        padding: 40px 20px;
        max-width: 1000px;
        margin: auto;
    }
    
    .infra-row {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }
    
    .infra-row.reverse {
        flex-direction: row-reverse;
    }
    
    .infra-img img {
        width: 100%;
        max-width: 400px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .infra-text {
        flex: 1;
        min-width: 250px;
    }
    
    .infra-text h3 {
        margin-top: 0;
        color: #007BFF;
    }
    h3 {
        font-size: 36px;
        font-weight: 800;
        color: #007BFF; /* Biru elegan */
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 20px;
        position: relative;
      }
      
      /* Garis bawah efek stylish */
      h3::after {
        content: "";
        display: block;
        width: 60px;
        height: 4px;
        background-color: #007BFF;
        margin: 10px auto 0;
        border-radius: 2px;
      }
      

    .infra-title {
        text-align: center;
        margin: 60px 0 40px;
        position: relative;
      }
      
      .infra-title h2 {
        font-size: 64px;
        font-weight: 900;
        color: #444; /* abu-abu gelap */
        letter-spacing: 1px;
        text-transform: none;
      }
      .infra-title::before {
        content: "SarPras";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 200px;
        font-weight: 900;
        color: rgba(0, 0, 0, 0.05); /* samar */
        white-space: nowrap;
        z-index: 1;
        pointer-events: none;
      }      
    
    @media (max-width: 768px) {
        .infra-row,
        .infra-row.reverse {
        flex-direction: column;
        text-align: center;
        }
    }
</style>

<header class="title-section">  
    <div class="header-left">
        <img src="{{ url('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar">
        <h1>Sarana & Prasarana PPM Al Kautsar</h1>
    </div>
    <a href="{{ url('home') }}#statistik" class="back-button">&larr; Kembali ke Beranda Utama</a>
</header>

<main class="infra-page">
  <section class="infra-title">
    <h2>Sarana & Prasarana</h2>
  </section>

  <div class="infra-row">
    <div class="infra-img">
      <img src="{{ url('img/sarpras1.jpg') }}" alt="Ruang Sekretariat">
    </div>
    <div class="infra-text">
      <h3>Ruang Sekretariat</h3>
      <p>Ruang Sekretariat berfungsi sebagai pusat kegiatan administratif di lingkungan PPM. Di sini tersimpan dokumen penting, arsip kegiatan, data santri, serta perlengkapan tulis kantor. Ruangan ini digunakan untuk koordinasi staf pengurus harian, pencatatan keuangan, dan dokumentasi surat-menyurat resmi.</p>
    </div>
  </div>

  <div class="infra-row reverse">
    <div class="infra-img">
      <img src="{{ url('img/sarpras2.jpg') }}" alt="Majelis Ta'lim">
    </div>
    <div class="infra-text">
      <h3>Majelis Ta'lim</h3>
      <p>Majelis Ta’lim merupakan ruang utama untuk kegiatan pembelajaran keagamaan, pengajian kitab, serta forum diskusi santri dan ustadz. Ruangan ini juga difungsikan sebagai tempat pelaksanaan rapat akbar, seminar internal, dan pelatihan pengembangan soft skill santri.</p>
    </div>
  </div>

  <div class="infra-row">
    <div class="infra-img">
      <img src="{{ url('img/sarpras3.jpg') }}" alt="Ruang Tamu">
    </div>
    <div class="infra-text">
      <h3>Ruang Tamu</h3>
      <p>Ruang Tamu berfungsi sebagai area penerimaan bagi tamu luar, wali santri, atau pihak eksternal yang ingin berkunjung ke pondok. Didesain dengan suasana yang nyaman dan ramah, ruangan ini menunjukkan sikap profesional dalam menjalin relasi dengan masyarakat dan stakeholder pondok.</p>
    </div>
  </div>

  <div class="infra-row reverse">
    <div class="infra-img">
      <img src="{{ url('img/sarpras4.jpg') }}" alt="Masjid/Tempat Ibadah">
    </div>
    <div class="infra-text">
      <h3>Masjid / Tempat Ibadah</h3>
      <p>Masjid menjadi pusat kegiatan spiritual seluruh civitas PPM. Selain sebagai tempat sholat berjamaah lima waktu, masjid juga digunakan untuk ceramah agama, dzikir bersama, dan kajian tafsir. Fasilitas ini terbuka untuk masyarakat sekitar dan menjadi simbol integrasi pondok dengan komunitas lokal.</p>
    </div>
  </div>

  <div class="infra-row">
    <div class="infra-img">
      <img src="{{ url('img/sarpras5.jpg') }}" alt="Ruang Musyawarah">
    </div>
    <div class="infra-text">
      <h3>Ruang Musyawarah</h3>
      <p>Ruang Musyawarah merupakan tempat strategis bagi rapat-rapat internal yang bersifat privat dan rahasia. Biasanya digunakan oleh dewan pengurus inti untuk menyusun kebijakan, menyelesaikan masalah internal, serta mengevaluasi program kerja pondok secara berkala.</p>
    </div>
  </div>

  <div class="infra-row reverse">
    <div class="infra-img">
      <img src="{{ url('img/sarpras6.jpg') }}" alt="Dapur">
    </div>
    <div class="infra-text">
      <h3>Dapur</h3>
      <p>Dapur PPM digunakan oleh santri dan pengurus untuk memasak makanan sehari-hari, baik untuk kegiatan pribadi maupun kolektif. Fasilitas ini dilengkapi dengan kompor, peralatan masak, dan bahan pokok yang dikelola secara bergilir oleh kelompok piket santri.</p>
    </div>
  </div>

  <div class="infra-row">
    <div class="infra-img">
      <img src="{{ url('img/sarpras7.jpg') }}" alt="Koperasi Santri">
    </div>
    <div class="infra-text">
      <h3>Koperasi Santri</h3>
      <p>Koperasi Santri adalah fasilitas ekonomi internal yang menyediakan kebutuhan harian seperti makanan ringan, alat tulis, perlengkapan mandi, dan lainnya. Selain itu, koperasi juga menjadi tempat praktek kewirausahaan bagi santri yang mengikuti kegiatan Unit Kegiatan Santri (UKS) bidang ekonomi kreatif.</p>
    </div>
  </div>

  <div class="infra-row reverse">
    <div class="infra-img">
      <img src="{{ url('img/sarpras8.jpg') }}" alt="Parkiran">
    </div>
    <div class="infra-text">
      <h3>Parkiran</h3>
      <p>Area parkir di lingkungan pondok disediakan untuk kendaraan pribadi santri, pengajar, dan tamu. Penataan yang teratur serta sistem keamanan menjaga kendaraan tetap aman dan tertib. Area ini juga digunakan untuk apel kegiatan luar ruangan bila diperlukan.</p>
    </div>
  </div>

  <div class="infra-row">
    <div class="infra-img">
      <img src="{{ url('img/sarpras9.jpg') }}" alt="Kamar Asrama">
    </div>
    <div class="infra-text">
      <h3>Kamar Asrama</h3>
      <p>Terdapat sekitar 39 kamar asrama yang menjadi tempat tinggal para santri selama masa belajar. Setiap kamar dirancang untuk kenyamanan dan kedisiplinan dengan sistem piket kebersihan, jadwal tidur, serta lingkungan yang mendukung kehidupan islami dan akademis.</p>
    </div>
  </div>

  <div class="infra-row reverse">
    <div class="infra-img">
      <img src="{{ url('img/sarpras10.jpg') }}" alt="Jemuran">
    </div>
    <div class="infra-text">
      <h3>Jemuran</h3>
      <p>Fasilitas jemuran disediakan di area terbuka yang cukup luas dan mendapatkan sinar matahari langsung. Para santri dapat menjemur pakaian dengan rapi dan bergantian, dengan sistem pengelolaan waktu agar tidak terjadi penumpukan pakaian antar penghuni kamar.</p>
    </div>
  </div>

  <div class="infra-row">
    <div class="infra-img">
      <img src="{{ url('img/sarpras11.jpg') }}" alt="Kamar Mandi">
    </div>
    <div class="infra-text">
      <h3>Kamar Mandi</h3>
      <p>Terdapat lebih dari 21 kamar mandi yang tersebar di area asrama. Fasilitas ini senantiasa dijaga kebersihannya oleh para santri yang dijadwalkan piket. Air bersih tersedia 24 jam, dan kamar mandi didesain agar memenuhi standar sanitasi yang baik dan sehat bagi seluruh penghuni.</p>
    </div>
  </div>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 PPM Al Kautsar. Hak cipta dilindungi undang-undang. | Dikembangkan oleh Tim Meownyala</p>
    </div>
</footer>

</body>
</html>