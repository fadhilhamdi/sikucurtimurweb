<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Nagari Sikucur Timur</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    <!-- Leaflet CSS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-kkn.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

@include('components.navbar')

<!-- ================= HERO ================= -->
<section class="hero">
    <div class="hero-content">
        <h1>Selamat Datang</h1>
        <h2>Website Nagari Sikucur Timur</h2>
        <p>
            Sumber informasi resmi dan terpercaya mengenai UMKM, Wisata,
            Tradisi, dan kegiatan masyarakat Nagari Sikucur Timur.
        </p>
    </div>
</section>

<!-- ================= INFO NAGARI ================= -->
<section class="info-nagari">
    <div class="info-wrapper">

        <!-- KIRI -->
        <div class="info-left">
            <h2>JELAJAHI NAGARI</h2>
            <p>
                Melalui website ini Anda dapat menjelajahi segala hal yang
                terkait dengan Nagari Sikucur Timur. Mulai dari profil
                pemerintahan, data penduduk, UMKM, wisata yang ditawarkan,
                hingga kegiatan masyarakat.
            </p>
        </div>

        <!-- KANAN -->
        <div class="info-right">
            <a href="{{ route('profil.nagari') }}" class="info-card">
              <img src="{{ asset('images/landing/icon-profil.png') }}" alt="Profil Nagari">
                <h4>PROFIL NAGARI</h4>
             </a>

             <a href="{{ route('umkm.index') }}" class="info-card">
                <img src="{{ asset('images/landing/icon-wisata.png') }}" alt="UMKM">
                <h4>UMKM</h4>
            </a>

            <a href="{{ route('wisata.index') }}" class="info-card">
                <img src="{{ asset('images/landing/icon-wisata.png') }}" alt="Wisata">
                <h4>WISATA</h4>
            </a>

            <a href="{{ route('kegiatan.index') }}" class="info-card">
                <img src="{{ asset('images/landing/icon-kegiatan.png') }}" alt="Kegiatan">
                <h4>KEGIATAN</h4>
            </a>


        </div>

    </div>
</section>

<!-- ================= MAP SECTION ================= -->
<section class="map-section" id="peta-nagari">
    <div class="map-header">
        <h2>PETA NAGARI</h2>
        <p>Lokasi Nagari Sikucur Timur, Kabupaten Padang Pariaman</p>
    </div>

    <div id="map"></div>

    <!-- PETUNJUK INTERAKSI -->
    <div style="
        margin-top: 12px;
        font-size: 14px;
        color: #555;
        text-align: center;
    ">
        💡 Klik area <strong>Nagari Sikucur Timur</strong> pada peta
        untuk langsung menuju <strong>Kantor Wali Nagari</strong>.
    </div>
</section>

<!-- ================= SCRIPTS ================= -->

<!-- Navbar scroll effect -->
<script>
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- Map Logic -->
<script src="{{ asset('js/map.js') }}"></script>

<!-- ================= GALERI KEGIATAN ================= -->
<section class="struktur galeri">
    <div class="struktur-header">
        <h2>Galeri Kegiatan</h2>
        <p>Dokumentasi berbagai kegiatan di Nagari Sikucur Timur</p>
    </div>

    <div class="carousel-wrapper">

        <!-- tombol kiri -->
        <button class="carousel-btn prev">&#10094;</button>

        <!-- track -->
        <div class="carousel-track">

            <div class="struktur-card">
                <img src="{{ asset('images/carousel/1.jpeg') }}" alt="Kegiatan Nagari 1">
            </div>

            <div class="struktur-card">
                <img src="{{ asset('images/carousel/2.jpeg') }}" alt="Kegiatan Nagari 2">
            </div>

            <div class="struktur-card">
                <img src="{{ asset('images/carousel/3.jpg') }}" alt="Kegiatan Nagari 3">
            </div>

            <div class="struktur-card">
                <img src="{{ asset('images/carousel/4.jpeg') }}" alt="Kegiatan Nagari 4">
            </div>

            <div class="struktur-card">
                <img src="{{ asset('images/carousel/5.jpg') }}" alt="Kegiatan Nagari 5">
            </div>

            <div class="struktur-card">
                <img src="{{ asset('images/carousel/6.jpg') }}" alt="Kegiatan Nagari 6">
            </div>

            <div class="struktur-card">
                <img src="{{ asset('images/carousel/7.jpg') }}" alt="Kegiatan Nagari 7">
            </div>

        </div>

        <!-- tombol kanan -->
        <button class="carousel-btn next">&#10095;</button>
    </div>
</section>

<script src="{{ asset('js/galeri-carousel.js') }}"></script>

<!-- ================= FOOTER ================= -->
<footer class="footer">
    <div class="footer-container">

        <!-- PROFIL -->
        <div class="footer-col">
            <h4>Nagari Sikucur Timur</h4>
            <p>
                Website resmi Nagari Sikucur Timur sebagai sarana informasi,
                transparansi, dan pelayanan kepada masyarakat.
            </p>
        </div>

        <!-- MENU -->
        <div class="footer-col">
            <h4>Menu</h4>
            <ul>
                <li> <a href="/" class="active">Home</a></li>
                <li> <a href="{{ route('profil.nagari') }}">Profil Nagari</a></li>
                <li> <a href="{{ route('umkm.index') }}">UMKM</a></li>
                <li> <a href="{{ route('wisata.index') }}">Wisata</a></li>
                <li> <a href="{{ route('kegiatan.index') }}">Kegiatan</a></li>
                <li> <a href="{{ url('/about') }}">About Us</a></li>
            </ul>
        </div>

        <!-- KONTAK -->
        <div class="footer-col">
            <h4>Kontak</h4>
            <ul>
                <li>📍 Sikucur Timur, Padang Pariaman</li>
                <li>📞 (0751) 123456</li>
                <li>✉️ nagarisikucurtimur@gmail.com</li>
            </ul>
        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom">
        © {{ date('Y') }} KKN Reguler I Universitas Andalas Sikucur Timur. All rights reserved.
    </div>
</footer>


</body>
</html>
