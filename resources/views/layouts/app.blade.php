<!DOCTYPE html>
<html>
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPM Al-Kautsar</title>
    <link rel="icon" type="image/jpeg" href="{{ url('img/logoppm.jpeg') }}">

    <!-- ====== External Styles & Scripts ====== -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('css/styles.css') }}" />
    @stack('styles') <!-- Untuk CSS tambahan per halaman -->
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="120">
  <!-- Scroll to Top Button -->
    <a href="#" class="scroll-top" id="scrollTopBtn" aria-label="Scroll to Top">
        <img src="{{ url('img/panah.png') }}" alt="Scroll to Top">
    </a>

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/6285646322300?text=Assalamu'alaikum%20Wr.Wb.%2C%20saya%20ingin%20bertanya%20tentang%20PPM%20Al%20Kautsar" 
        class="wa-float" target="_blank" aria-label="Chat via WhatsApp">
        <img src="{{ url('img/favicon-64x64.ico') }}" alt="WhatsApp">
    </a>

    <style>
        /* Tombol Scroll ke atas */
        .scroll-top {
        position: fixed;
        width: 55px;
        height: 55px;
        bottom: 95px;
        right: 20px;
        background-color: #ffffff;  /* Warna tombol scroll */
        border-radius: 50%;
        box-shadow: 2px 4px 20px rgba(54, 159, 228, 0.646);
        z-index: 998;
        display: flex;
        justify-content: center;
        align-items: center;
        animation: bounce 2s infinite;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
        overflow: hidden;
        opacity: 0; /* Mulai dengan opacity 0, tersembunyi */
        }

        .scroll-top.show {
        opacity: 1; /* Munculkan tombol scroll dengan fade */
        }

        .scroll-top img {
        width: 60%;
        height: 60%;
        object-fit: contain;
        }

        .scroll-top:hover {
        box-shadow: 0 0 15px 5px rgba(201, 221, 243, 0.6);
        transform: scale(1.3);
        }

        /* WhatsApp icon */
        .wa-float {
        position: fixed;
        width: 55px;
        height: 55px;
        bottom: 20px;
        right: 20px;
        background-color: #25d366;  /* Warna WhatsApp */
        color: #fff;
        border-radius: 50%;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        z-index: 999;
        display: flex;
        justify-content: center;
        align-items: center;
        animation: bounce 2s infinite;
        transition: transform 0.3s ease-in-out;
        cursor: pointer;
        }

        .wa-float img {
        width: 28px;
        height: 28px;
        }

        .wa-float:hover {
        box-shadow: 0 0 15px 5px rgba(37, 211, 102, 0.6);
        transform: scale(1.1);
        }

        /* ====== Media Queries untuk Responsif ====== */

        /* Untuk perangkat kecil (HP) */
        @media (max-width: 600px) {
        .scroll-top {
            width: 45px;
            height: 45px;
            bottom: 70px; /* Posisi lebih pas di layar kecil */
            right: 15px;
        }

        .scroll-top img {
            width: 65%;
            height: 65%;
        }

        .wa-float {
            width: 45px;
            height: 45px;
            bottom: 15px;
            right: 15px;
        }

        .wa-float img {
            width: 24px;
            height: 24px;
        }
        }

        /* Untuk perangkat sedang (Tablet) */
        @media (min-width: 601px) and (max-width: 1024px) {
        .scroll-top {
            bottom: 90px;
            right: 24px;
        }

        .scroll-top img {
            width: 55%;
            height: 60%;
        }

        .wa-float {
            width: 50px;
            height: 50px;
            bottom: 25px;
            right: 25px;
        }

        .wa-float img {
            width: 28px;
            height: 28px;
        }
        }

        /* Untuk perangkat besar (Desktop) */
        @media (min-width: 1025px) {
        .scroll-top {
            bottom: 95px;
            right: 25px;
        }

        .scroll-top img {
            width: 60%;
            height: 60%;
        }

        .wa-float {
            bottom: 25px;
            right: 25px;
        }

        .wa-float img {
            width: 30px;
            height: 30px;
        }
        }

        @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-8px);
        }
        }
    </style>

    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')

    <!-- CDN JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @stack('styles')
    
    <!-- Custom JS -->
    @stack('scripts')

    <script>
        //=====================================================================================
           // Menambahkan event listener untuk scroll
        window.addEventListener("scroll", function() {
        var scrollTopBtn = document.querySelector(".scroll-top");
        var waBtn = document.querySelector(".wa-float");

        // Tampilkan tombol setelah scroll lebih dari 100px
        if (document.documentElement.scrollTop > 100 || document.body.scrollTop > 100) {
            scrollTopBtn.classList.add("show");  // Menambahkan class show untuk efek fade
            waBtn.classList.add("show");         // Menambahkan class show untuk WhatsApp icon
        } else {
            scrollTopBtn.classList.remove("show"); // Menghapus class show untuk efek fade
            waBtn.classList.remove("show");        // Menghapus class show untuk WhatsApp icon
        }
        });

        // Menambahkan event listener untuk klik tombol scroll ke atas
        document.getElementById("scrollTopBtn").addEventListener("click", function() {
        window.scrollTo({ top: 0, behavior: 'smooth' }); // Scroll ke atas dengan efek smooth
        });
    </script>
</body>
</html>