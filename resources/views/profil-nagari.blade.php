<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Nagari Sikucur Timur</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/profil-nagari.css') }}">
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

    {{-- NAVBAR --}}
    @include('components.navbar')

    {{-- WRAPPER (PENTING: BIAR TIDAK KETUTUP NAVBAR) --}}
    <main class="page-content">



        {{-- KONTEN --}}
        <section class="content">

            {{-- VISI --}}
            <div class="card">
                <h2>Visi</h2>
                <p>
                    "Senggigi Berseri"
                </p></br>
                 <p>
        (Bersih, Relegius, Sejahtera, Rapi, dan Indah)
                </p></br>
                 <p>
"Terwujudnya masyarakat Desa Senggigi yang Bersih, Relegius, Sejahtera, Rapi dan 
Indah melalui Akselerasi Pembangunan yang berbasis Keagamaan, Budaya Hukum dan Berwawasan 
Lingkungan dengan berorentasi pada peningkatan Kinerja Aparatur dan Pemberdayaan Masyarakat"
                </p>
            </div>

            {{-- MISI --}}
            <div class="card">
                <h2>Misi</h2>
                <ul>
                    <li>Meningkatkan kualitas pelayanan kepada masyarakat</li>
                    <li>Mengembangkan potensi ekonomi nagari</li>
                    <li>Mewujudkan tata kelola pemerintahan yang transparan</li>
                    <li>Meningkatkan kualitas pendidikan dan keagamaan</li>
                </ul>
            </div>

        </section>

    </main>
{{-- SEJARAH SINGKAT --}}
<div class="card sejarah">
    <h2>Sejarah Singkat</h2>

    <p class="sejarah-intro">
        Nagari Sikucur Timur merupakan salah satu nagari yang berada di Kecamatan
        V Koto Kampung Dalam, Kabupaten Padang Pariaman, Provinsi Sumatera Barat.
        Nagari ini terbentuk melalui proses pemekaran wilayah dari Nagari Sikucur
        guna meningkatkan efektivitas pemerintahan dan pelayanan kepada masyarakat.
    </p>

    <ul class="sejarah-poin">
        <li>
            <strong>Pemekaran Wilayah</strong><br>
            Nagari Sikucur Timur merupakan hasil pemekaran dari Nagari Sikucur
            bersama beberapa nagari lainnya untuk mendukung tata kelola pemerintahan
            yang lebih efektif.
        </li>

        <li>
            <strong>Letak Geografis</strong><br>
            Berjarak sekitar 9,5 km dari pusat pemerintahan Kecamatan
            V Koto Kampung Dalam dengan luas wilayah ±12,86 km².
        </li>

        <li>
            <strong>Kondisi Sosial Budaya</strong><br>
            Masyarakat Nagari Sikucur Timur didominasi oleh masyarakat Minangkabau
            yang menjunjung tinggi adat istiadat dan nilai budaya lokal.
        </li>

        <li>
            <strong>Bahasa Daerah</strong><br>
            Bahasa sehari-hari yang digunakan adalah Bahasa Minangkabau
            dengan dialek khas Sikucur.
        </li>

        <li>
            <strong>Sejarah Nagari</strong><br>
            Walaupun telah menjadi nagari definitif, sejarah Nagari Sikucur Timur
            tidak terlepas dari perjalanan panjang Nagari Sikucur sebagai nagari induk.
        </li>
    </ul>
</div>

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

   @include('components.footer')

</body>
</html>
