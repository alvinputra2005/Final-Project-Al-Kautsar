<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Navbar Blade -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <!-- Logo PPM -->
    <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM" style="width: 40px; height: 40px; margin-right: 10px; border-radius: 6px;" />
    <a class="navbar-brand" href="#beranda-section">PPM Al Kautsar</a>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#beranda-section">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#sejarah">Sejarah</a></li>
            <li class="nav-item"><a class="nav-link" href="#profile">Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="#testimoni">Ulasan</a></li>
            <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan</a></li>
            <li class="nav-item"><a class="nav-link" href="#prestasi">Prestasi</a></li>
            <li class="nav-item"><a class="nav-link" href="#footer">Tentang</a></li>
        </ul>
    </div>

    <!-- Sign In Button -->
    <a href="{{ route('login') }}" class="sign-in-btn">
        <div class="sign-in-content">
            <i class="fas fa-right-to-bracket sign-in-icon"></i>
            <i class="fas fa-running running-icon"></i>
            <span>Sign In</span>
        </div>
    </a>

    <!-- Menu Toggle (for mobile) -->
    <div class="menu-toggle" id="menuToggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <!-- Sidebar (for mobile) -->
    <div class="nav-sidebar" id="sidebar">
        <a href="#beranda-section" class="nav-link">Beranda</a>
        <a href="#profile" class="nav-link">Profil</a>
        <a href="#testimoni" class="nav-link">Ulasan</a>
        <a href="#kegiatan" class="nav-link">Kegiatan</a>
        <a href="#prestasi" class="nav-link">Prestasi</a>
        <a href="#footer" class="nav-link">Tentang</a>
    </div>

    <!-- Sidebar Overlay (for mobile) -->
    <div class="sidebar-overlay" id="sidebar-overlay"></div>
</nav>

<!-- Include External Stylesheets -->
@push('styles')
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
@endpush

<!-- Include External Scripts -->
@push('scripts')
    <script src="{{ asset('js/navbar.js') }}"></script>
@endpush
