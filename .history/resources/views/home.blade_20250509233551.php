@extends('layouts.app')  <!-- Gunakan layout utama -->

@section('content')
<div id="beranda-section" class="position-relative overflow-hidden">
    <div class="carousel-background">
      <div id="carousel-beranda" class="carousel slide" data-ride="carousel" data-interval="1500">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/dpn/1.jpg" class="d-block w-100" alt="Foto 1" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/3.jpg" class="d-block w-100" alt="Foto 3" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/4.jpg" class="d-block w-100" alt="Foto 4" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/5.jpg" class="d-block w-100" alt="Foto 5" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/6.jpg" class="d-block w-100" alt="Foto 6" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/7.jpg" class="d-block w-100" alt="Foto 7" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/8.jpg" class="d-block w-100" alt="Foto 8" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/9.jpg" class="d-block w-100" alt="Foto 9" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/10.jpg" class="d-block w-100" alt="Foto 10" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/11.jpg" class="d-block w-100" alt="Foto 11" />
          </div>
        </div>
      </div>
    </div>

    <div class="beranda-content">
      <div class="text-center">
        <h1>Selamat Datang di PPM Malang Raya</h1>
        <p><b>Pondok Pesantren Mahasiswa Al Kautsar</b> <br>"Sarjana yang Mubalight - Mubalight yang Sarjana"
        <br><i>Kuliah Nomor 1, Mondok Nomor 1</i></p>
        <a href="https://forms.gle/X4HXBBtRUnuCBTZz6" class="button-pelayanan" target="_blank">Daftar Disini</a>
      </div>
    </div>
  </div>

  <section id="sejarah" class="section-sejarah">
    <div class="container text-center">
        <h2 class="mb-5">Sejarah Kami</h2>
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="img/sejarah.png" alt="Sejarah" class="img-fluid rounded shadow" />
        </div>
        <div class="col-md-6 text-start">
          <div class="timeline">
            <div class="sejarah-item">
              <div class="timeline-dot"></div>
              <div class="sejarah-deskripsi">
                <h5>2008 - PPM Baitul Jannah</h5>
                <p>Awal adanya PPM di Malang Raya ini adalah pada PPM Baitul Jannah yang menjadi batu loncatan berkembangnya PPM di daerah Malang</p>
              </div>
            </div>
            <div class="sejarah-item">
              <div class="timeline-dot"></div>
              <div class="sejarah-deskripsi">
                <h5>2012 - PPM Al Kautsar</h5>
                <p>Setelah berjalannya PPM Baitul Jannah selama 4 tahun, kami mulai mendirikan PPM baru bernama PPM Al Kautsar yang berbeda lokasi.</p>
              </div>
            </div>
            <div class="sejarah-item">
              <div class="timeline-dot"></div>
              <div class="sejarah-deskripsi">
                <h5>2013 - PPM Malang Raya</h5>
                <p>Setelah dibentuknya kedua PPM tadi, maka kami mendirikan sebuah organisasi pengelola yang berguna mengelola PPM dalam satu struktur bernama PPM Malang Raya</p>
              </div>
            </div>
            <div class="sejarah-item">
              <div class="timeline-dot"></div>
              <div class="sejarah-deskripsi">
                <h5>2016 - Yayasan Bina Insani Sukses Malang</h5>
                <p>Agar adanya PPM ini resmi dan diakui oleh pemerintah setempat atau kementrian agama terkait maka PPM ini di bawahi oleh Yayasan Bina Insani Sukses Malang yang terdaftar resmi di Negara</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="gradiasi-putih-biru"></div>
  <section class="section-video" id="profile" style="scroll-margin-top: 32px;">
    <h2>Video Profil Kami</h2>
    <p>Saksikan sekilas tentang kehidupan kami.</p>
    <div class="video-container">
      <div class="video-embed">
          <video autoplay muted loop controls>
          <source src="img/ppm.mp4" type="video/mp4">
          Browser Anda tidak mendukung tag video.
        </video>
      </div>
    </div>
  </section>
  <div></div>
  
  <section id="misiku" class="misiku-section">
    <div class="container">
      <h2 class="section-title text-center">VISI MISI PPM</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="visi-box">
            <h3>Visi</h3>
            <ol>
              <li>Menjadi lembaga unggulan dalam pembinaan karakter Islami dan akademik.</li>
              <li>Mencetak generasi yang siap bersaing di era global dengan dasar iman dan ilmu.</li>
              <li>Mewujudkan lingkungan yang berorientasi pada pembentukan akhlak dan intelektual.</li>
            </ol>
          </div>
        </div>
        <div class="col-md-6">
          <div class="misi-box">
            <h3>Misi</h3>
            <ol>
              <li>Menyelenggarakan pendidikan berbasis nilai-nilai keislaman dan keilmuan.</li>
              <li>Mengembangkan potensi santri/mahasiswa dalam bidang akademik dan non-akademik.</li>
              <li>Menciptakan lingkungan yang kondusif untuk belajar dan berorganisasi.</li>
              <li>Menanamkan nilai integritas, tanggung jawab, dan kepemimpinan.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="struktur">
    <h2><b>Struktur Kepengurusan Pondok</b></h2>
    <div class="wrapper">
  
      <div class="box struktur-box">
        Kepala Pondok
        <div class="struktur-overlay">
          <img src="img/kepala.png" alt="Kepala Pondok">
          <span>Bp. Rudi</span>
        </div>
      </div>
      <div class="line-vertical"></div>
  
      <div class="box struktur-box">
        Wakil Kepala Pondok
        <div class="struktur-overlay">
          <img src="img/wakil.png" alt="Wakil Kepala">
          <span>Bp. Muaz</span>
        </div>
      </div>
      <div class="line-vertical"></div>
  
      <div class="box struktur-box">
        Pendamping Kepala
        <div class="struktur-overlay">
          <img src="img/pendamping.png" alt="Pendamping">
          <span>Bp. Ubayd</span>
          <img src="img/dg1.png" alt="Dewan Guru">
          <span>Ust. Arif</span>
          <img src="img/dg5.png" alt="Dewan Guru">
          <span>Ust. Tegar</span>
        </div>
      </div>
      <div class="line-vertical"></div>
  
      <div class="horizontal-line"><span></span></div>
  
      <div class="level">
        <div class="box struktur-box">
          Dewan Guru
          <div class="struktur-overlay">
            <img src="img/dg2.png" alt="Dewan Guru">
            <span>Ust. Fandy</span>
            <img src="img/dg3.png" alt="Dewan Guru">
            <span>Ust. Rio</span>
            <img src="img/dg4.png" alt="Dewan Guru">
            <span>Ust. Sindung</span>
          </div>
        </div>
        <div class="box struktur-box">
          Pengurus Keuangan
          <div class="struktur-overlay">
            <img src="img/ku1.png" alt="Keuangan">
            <span>Bp. Kholis</span>
            <img src="img/ku2.png" alt="Keuangan">
            <span>Sdr. Roma</span>
            <img src="img/ku3.png" alt="Keuangan">
            <span>Sdr. Fadhil</span>
          </div>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <div class="level">
        <div class="box struktur-box">
          Tim 7
          <div class="struktur-overlay">
            <img src="img/dg6.png" alt="Tim 7">
            <span>Ust. Irvan</span>
            <img src="img/dg7.png" alt="Tim 7">
            <span>Ust. Catur</span>
          </div>
        </div>
        <div class="box struktur-box">
          Penerobos
          <div class="struktur-overlay">
            <img src="img/pb1.png" alt="Penerobos">
            <span>Sdr. Raihan</span>
            <img src="img/pb2.png" alt="Penerobos">
            <span>Sdr. Sulthon</span>
            <img src="img/pb3.png" alt="Penerobos">
            <span>Sdr. Wira</span>
            <img src="img/pb4.png" alt="Penerobos">
            <span>Sdr. Ryant</span>
          </div>
        </div>
        <div class="box struktur-box">
          Kesiswaan
          <div class="struktur-overlay">
            <img src="img/ksw1.png" alt="Kesiswaan">
            <span>Sdr. Arbi</span>
            <img src="img/ksw2.png" alt="Kesiswaan">
            <span>Sdr. Panca</span>
          </div>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <div class="box struktur-box">
        Santri
        <div class="struktur-overlay">
          <img src="img/sw1.png" alt="Santri">
          <span>Santri Teladan</span>
          <img src="img/sw2.png" alt="Santri">
        </div>
      </div>
  
    </div>
  </section>  

  <section id="statistik" style="scroll-margin-top: 10px;">
    <h2>Data Statistik Pondok</h2>
    <div class="stat-container">
      <div class="stat-box">
        <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
        <h3 class="counter" data-target="35">7</h3>
        <p>Tenaga Kependidikan</p>
        <a href="tendik/tendik.php" class="btn-stat-left">Lihat Profil</a>
      </div>
      <div class="stat-box">
        <div class="icon"><i class="fas fa-user-graduate"></i></div>
        <h3 class="counter" data-target="500">65</h3>
        <p>Santri Aktif</p><br>
        <a href="santri-katalog/index.php" class="btn-stat">Data Santri</a>
      </div>
      <div class="stat-box">
        <div class="icon"><i class="fas fa-users"></i></div>
        <h3 class="counter" data-target="1200">800++</h3>
        <p>Alumni</p><br>
        <a href="{{ route('alumnis.index') }}" class="btn-stat">Info Alumni</a>
      </div>
      <div class="stat-box">
      <div class="icon"><i class="fas fa-building"></i></div>
      <h3 class="counter" data-target="50">10+</h3>
      <p>Sarana Prasarana</p><br>
      <a href="fasilitas/index.php" class="btn-stat">Lihat Fasilitas</a>
    </div>
    </div>
  </section>
  
<section id="testimoni" style="scroll-margin-top: 10px;">
    <h2>BOX ULASAN PPM AL KAUTSAR</h2>
    <div class="google-review">
        @foreach($ulasan as $item)
        <div class="review-item">
            <img src="{{ asset('img/Fotouser.jpg') }}" alt="{{ $item->nama }}">
            <div class="review-content">
                <h4>{{ $item->nama }}</h4>
                <div class="stars">{{ str_repeat("⭐", $item->rating) }}</div>
                <p>{{ $item->ulasan }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('ulasan.create') }}" class="btn-keren">Tambahkan Ulasanmu</a>
    </div>
</section>
  
  <section id="kegiatan" style="scroll-margin-top: 22px;">
    <h2>Kegiatan Pondok</h2>
  
    <div class="kegiatan-utama">
      <img src="img/ac1.jpg" alt="Pesantren Ramadhan">
      <div class="overlay-text">
        <h3>Silaturahim Syawal 1446H</h3>
        <p>Bersalam salaman antar santri, saling memaafkan dan mempererat persaudaraan.</p>
        <a href="{{ route('kegiatan') }}" class="btn-kegiatan"><i class="fas fa-users"></i>Kegiatan lainnya</a>
      </div>
    </div>
  
    <div class="grid-kegiatan">
      <div class="card-kegiatan">
        <img src="img/ac2.jpg" alt="Kajian Akbar">
        <h4>Mini Soccer</h4>
      </div>
      <div class="card-kegiatan">
        <img src="img/ac3.jpg" alt="Pelatihan Tahsin">
        <h4>PENA Bersama</h4>
      </div>
      <div class="card-kegiatan">
        <img src="img/ac4.jpg" alt="Bakti Sosial">
        <h4>AOV (Al Kautsar On Vacation)</h4>
      </div>
      <div class="card-kegiatan">
        <img src="img/ac5.jpg" alt="Rihlah Santri">
        <h4>Festival Santri Sholeh</h4>
      </div>
    </div>
    <!-- <a class="lihat-semua" href="kegiatan.php">Lihat Semua Kegiatan <i class="fas fa-arrow-right"></i></a> -->
  </section>
  
  <section  class="container my-5" id="prestasi" style="scroll-margin-top: 1px;">
    <div class="d-flex justify-content-between align-items-center mb-4" >
      <h2>Prestasi</h2>
      <a href="{{ route('prestasi') }}" class="btn btn-outline-primary"><i class="fas fa-medal"></i>Prestasi Selengkapnya</a>
    </div>
  
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="img/prestasi1.jpg" class="card-img-top" alt="Prestasi 1">
          <div class="card-body">
            <p class="card-text"><b>Hasan Argadinata, S.Pd, M.Pd, MCE, CRA, CRMPA.</b><br>(S2 Maxima Cumlaude di Umur 23 Tahun)<br> "Berprestasi tak mengenal batas usia! Di usia 23 tahun, perjalanan akademikku membawaku ke tingkat selanjutnya. Dari pondok pesantren hingga kuliah S2, setiap langkahku ditenun oleh semangat fisabilillah dan ketekunan. Terimakasih kepada semua yang telah mendukungku!." <br> - Hasan Argadinata</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/prestasi2.jpg" class="card-img-top" alt="Prestasi 2">
          <div class="card-body">
            <p class="card-text"><b>Ayu Auliya Rahman S.Pd</b><br>(Lulusan UM S1 Pendidikan Biologi)<br>"Jarak jauh dari rumah merupakan bukan penghambat bagi kita untuk menimba ilmu, saya ,membuktikan bahwa semangat kuliah juga tidak akan terhambat dengan kegiatan dalam aktivitas di pondok. Orang tua mu akan bangga dengan kedua pencapaianmu." <br> - Ayu Aulya Rahman</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/prestasi3.jpg" class="card-img-top" alt="Prestasi 3">
          <div class="card-body">
            <p class="card-text"><b>Syefa Dou Abirama</b><br>(Peraih Golden Ticket UM Jalur Prestasi)<br>"Menjadi seorang atlet bukan sekadar berlatih untuk menang. Ini adalah perjalanan panjang, penuh jatuh bangun, rasa lelah, rasa sakit, dan ragu yang tak terhitung jumlahnya. Namun justru di sanalah makna sesungguhnya ditemukan: tentang keberanian untuk terus melangkah, tentang semangat yang tidak pernah padam, dan tentang keyakinan bahwa setiap tetes keringat adalah investasi untuk impian yang lebih besar. Menjadi atlet adalah memilih untuk tidak menyerah, bahkan ketika dunia berkata itu mustahil." <br> - Abika</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush
