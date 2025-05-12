<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SarPras PPM Al-Kautsar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    
<style>
    /* public/css/style.css */
body {
    font-family: 'Georgia', serif;
    margin: 0;
    background-color: #f2f5f9;
    color: #333;
}

/* Styling section and rows for Sarana & Prasarana */
.infra-title h2 {
    font-size: 2rem;
    text-align: center;
    margin: 20px 0;
}

.infra-row {
    display: flex;
    margin: 20px;
    justify-content: space-between;
}

.infra-row.reverse {
    flex-direction: row-reverse;
}

.infra-img img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.infra-text {
    width: 60%;
    padding-left: 20px;
}

.infra-text h3 {
    font-size: 1.5rem;
    color: #0d6efd;
}

.infra-text p {
    font-size: 1rem;
    line-height: 1.6;
}
</style>

<header class="title-section">  
    <div class="header-left">
        <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM Al Kautsar">
        <h1>Sarana & Prasarana PPM Al Kautsar</h1>
    </div>
    <a href="{{ url('home') }}" class="back-button">&larr; Kembali ke Beranda Utama</a>
</header>

<main class="infra-page">
    <section class="infra-title">
        <h2>Sarana & Prasarana</h2>
    </section>

    <div class="infra-row">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras1.jpg') }}" alt="Ruang Sekretariat">
        </div>
        <div class="infra-text">
            <h3>Ruang Sekretariat</h3>
            <p>Ruangan untuk menyimpan segala keperluan administratif atau arsip yang dimiliki PPM.</p>
        </div>
    </div>

    <div class="infra-row reverse">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras2.jpg') }}" alt="Majelis Ta'lim">
        </div>
        <div class="infra-text">
            <h3>Majelis Ta'lim</h3>
            <p>Ruangan untuk menjalankan KBM atau acara kebersamaan atau rapat bulanan PPM.</p>
        </div>
    </div>

    <div class="infra-row">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras3.jpg') }}" alt="Ruang Tamu">
        </div>
        <div class="infra-text">
            <h3>Ruang Tamu</h3>
            <p>Tempat untuk menerima tamu yang merupakan pengunjung ppm atau keluarga dari para santri, biasanya juga diarahkan ke kamar tamu yang telah tersedia.</p>
        </div>
    </div>

    <div class="infra-row reverse">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras4.jpg') }}" alt="Masjid/Tempat Ibadah">
        </div>
        <div class="infra-text">
            <h3>Masjid/Tempat Ibadah</h3>
            <p>Tempat untuk beribadah para santri dan penghuni asrama bahkan para masyarakat sekitar.</p>
        </div>
    </div>

    <div class="infra-row">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras5.jpg') }}" alt="Ruang Musyawarah">
        </div>
        <div class="infra-text">
            <h3>Ruang Musyawarah</h3>
            <p>Walau terkadang rapat itu berada pada majelis ta'lim, tapi jika skala rapatnya inti yang bersifat rahasia, ruangan ini tempatnya.</p>
        </div>
    </div>

    <div class="infra-row reverse">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras6.jpg') }}" alt="Dapur">
        </div>
        <div class="infra-text">
            <h3>Dapur</h3>
            <p>Para penghuni asrama bisa memanfaatkan dapur untuk memasak makanan.</p>
        </div>
    </div>

    <div class="infra-row">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras7.jpg') }}" alt="Koperasi Santri">
        </div>
        <div class="infra-text">
            <h3>Koperasi Santri</h3>
            <p>Tempat para santri bisa membeli jajanan dan tempat bagi Unit Kegiatan Santri KWU berjualan.</p>
        </div>
    </div>

    <div class="infra-row reverse">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras8.jpg') }}" alt="Parkiran">
        </div>
        <div class="infra-text">
            <h3>Parkiran</h3>
            <p>Tempat meletakkan kendaraan bagi para penghuni asrama.</p>
        </div>
    </div>

    <div class="infra-row">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras9.jpg') }}" alt="Kamar Asrama">
        </div>
        <div class="infra-text">
            <h3>Kamar Asrama</h3>
            <p>Sejumlah kurang lebih 39 kamar untuk bertempatnya para santri.</p>
        </div>
    </div>

    <div class="infra-row reverse">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras10.jpg') }}" alt="Jemuran">
        </div>
        <div class="infra-text">
            <h3>Jemuran</h3>
            <p>Tempat para santri atau penghuni asrama menempatkan baju mereka setelah dicuci agar kering.</p>
        </div>
    </div>

    <div class="infra-row">
        <div class="infra-img">
            <img src="{{ asset('img/sarpras11.jpg') }}" alt="Kamar Mandi">
        </div>
        <div class="infra-text">
            <h3>Kamar Mandi</h3>
            <p>21 lebih Kamar Mandi yang dapat siap digunakan para penghuni asrama.</p>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 PPM Al Kautsar. All rights reserved. | Developed by Meownyala Team</p>
    </div>
</footer>

</body>
</html>