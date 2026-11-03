<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kegiatan Nagari</title>
    <link rel="stylesheet" href="{{ asset('css/kegiatan.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-kkn.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

@include('components.navbar')

<!-- ================= CONTAINER UTAMA ================= -->
<div class="page-container">

    <h1 class="page-title">Kegiatan KKN 1 UNAND Nagari Sikucur Timur 2026</h1>
    <p class="page-desc">
        Dokumentasi dan informasi kegiatan Selama KKN di Nagari Sikucur Timur
    </p>

    <!-- ================= GRID KEGIATAN ================= -->
    <div class="news-grid">

        <div class="news-card">
            <img src="/images/kegiatan/sigiber1.jpg" alt="">
            <div class="news-content">
                <h3>SIGIBER & Anti Bullying</h3>
                <p>
                    Kegiatan SIGIBER (Sikat Gigi Bersama) dan Anti Bullying di
                    SDN 27 V Koto Kampung Dalam, pada tanggal 8 dan 9 Januari 2025
                </p>
                <a href="{{ route('kegiatan.show', 'SIGIBER & Anti Bullying1') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/images/kegiatan/stunting1.jpeg" alt="">
            <div class="news-content">
                <h3>Sosialisasi Stunting & MCU</h3>
                <p>
                    Kegiatan Sosialisasi Stunting dan MCU di Posyandu
                    Simpang Koto Hilalang, Pada Tanggal 14 Januari 2025
                </p>
                <a href="{{ route('kegiatan.show', 'Sosialisasi Stunting & MCU1') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/images/kegiatan/sigiber2.jpg" alt="">
            <div class="news-content">
                <h3>SIGIBER & Anti Bullying</h3>
                <p>
                    Kegiatan SIGIBER (Sikat Gigi Bersama) dan Anti Bullying di
                    SDN 07 V Koto Kampung Dalam, Pada Tanggal 14 dan 15 Januari 2025
                </p>
                <a href="{{ route('kegiatan.show', 'SIGIBER & Anti Bullying2') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/images/kegiatan/stunting2.jpeg" alt="">
            <div class="news-content">
                <h3>Sosialisasi Stunting & MCU</h3>
                <p>
                    Kegiatan Sosialisasi Stunting dan MCU di Posyandu
                    Simpang Tiga Paladangan, Pada Tanggal 15 Januari 2025
                </p>
                <a href="{{ route('kegiatan.show', 'Sosialisasi Stunting & MCU2') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/images/kegiatan/hukum.jpeg" alt="">
            <div class="news-content">
                <h3>Sosialisasi Penyuluhan Hukum</h3>
                <p>
                    Kegiatan Sosialisasi Penyuluhan Hukum Terkait
                    Narkotika dan Judi Online bersama Kejaksaan Negeri Pariaman
                    di Mesjid Raya Nurul Ikhlas, Pada Tanggal 22 Januari 2025
                </p>
                <a href="{{ route('kegiatan.show', 'Sosialisasi Penyuluhan Hukum') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

        <div class="news-card">
            <img src="/images/kegiatan/toga.jpeg" alt="">
            <div class="news-content">
                <h3>Sosialisasi TOGA & Screening Prolanis</h3>
                <p>
                    Sosialisasi TOGA (Tanaman Obat Keluarga) dan Kegiatan
                    Screening Prolanis bersama Puskesmas di Posyandu Koto Hilalang,
                    Pada Tanggal 24 Januari 2025
                </p>
                <a href="{{ route('kegiatan.show', 'Sosialisasi TOGA & Screening Prolanis') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

         <div class="news-card">
            <img src="/images/kegiatan/perkawinan.jpg" alt="">
            <div class="news-content">
                <h3>Pencatatan Perkawinan</h3>
                <p>Kegiatan Pencatatan Perkawinan Oleh KUA Sikucur Timur di Mesjid Raya Nurul Ikhlas, 
                    Pada Tanggal 29 Januari 2026</p>
                <a href="{{ route('kegiatan.show', 'Pencatatan Perkawinan') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

         <div class="news-card">
            <img src="/images/kegiatan/melukis.jpeg" alt="">
            <div class="news-content">
                <h3>Melukis Mural</h3>
                <p>Kegiatan Melukis di Sdn 07 V Koto Kampung Dalam, Pada tanggal 2 Februari 2026</p>
                <a href="{{ route('kegiatan.show', 'Melukis Mural') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

         <div class="news-card">
            <img src="/images/kegiatan/plh.jpeg" alt="">
            <div class="news-content">
                <h3>Papan Lingkungan Hidup</h3>
                <p>Pemasangan PLH (Papan Lingkungan Hidup), Pada tanggal 3 Februari 2026</p>
                <a href="{{ route('kegiatan.show', 'Papan Lingkungan Hidup') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

         <div class="news-card">
            <img src="/images/kegiatan/hasil-toga.jpeg" alt="">
            <div class="news-content">
                <h3>Hasil Toga</h3>
                <p>Hasil Toga dan Pemasangan Papan Nama, Pada tanggal 3 Februari 2026</p>
                <a href="{{ route('kegiatan.show', 'Hasil Toga') }}">
                    Lihat Detail →
                </a>
            </div>
        </div>

    </div>
</div>
<!-- ================= END CONTAINER ================= -->

@include('components.footer')

</body>
</html>
