<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Wisata Nagari Sikucur Timur</title>
    <link rel="stylesheet" href="{{ asset('css/wisata.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-kkn.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="wisata-page">

@include('components.navbar')

<!-- HERO -->
<section class="wisata-hero">
    <h1>Wisata Nagari Sikucur Timur</h1>
    <p>Menjelajahi keindahan alam dan potensi wisata Nagari Sikucur Timur</p>
</section>

<!-- LIST -->
<section class="wisata-list">
    
      <div class="wisata-card">
        <img src="/images/wisata/Langkuik Indah.jpeg" alt="Langkuik-Indah">
        <div class="wisata-info">
            <h3>Langkuik Indah</h3>
            <span>📍 Nagari Sikucur Timur</span>
            <p>Pesona air terjun alami di Nagari Sikucur Timur, dengan aliran air jernih dan suasana hijau yang menenangkan.
                 Cocok untuk wisata alam, relaksasi, dan foto pemandangan alam.</p>
            <a href="{{ route('wisata.show', 'Langkuik-Indah') }}">
                Jelajahi →
            </a>
        </div>
    </div>


    <div class="wisata-card">
        <img src="/images/wisata/Pincuran Maruok.jpg" alt="Pincuran-Maruok">
        <div class="wisata-info">
            <h3>Pincuran Maruok</h3>
            <span>📍 Nagari Sikucur Timur</span>
            <p>Kolam renang alami dan pemandian mata air yang menyuguhkan pengalaman bermain air yang menyegarkan di tengah keindahan alam Nagari Sikucur Timur.
                 Cocok dikunjungi untuk rekreasi keluarga, piknik santai, dan liburan akhir pekan.</p>
            <a href="{{ route('wisata.show', 'Pincuran-Maruok') }}">
                Jelajahi →
            </a>
        </div>
    </div>

    <div class="wisata-card">
        <img src="/images/wisata/Pincuran Tujuah.jpg" alt="Pincuran-Tujuah">
        <div class="wisata-info">
            <h3> Pincuran Tujuah </h3>
            <span>📍 Nagari Sikucur Timur</span>
            <p>Pemandian alam dengan air jernih dan suasana sejuk di Nagari Sikucur Timur. 
                Cocok untuk berenang, bersantai, dan menikmati keasrian alam khas wisata pedesaan.</p>
            <a href="{{ route('wisata.show', 'Pincuran-Tujuah') }}">
                Jelajahi →
            </a>
        </div>
    </div>

</section>

@include('components.footer')

</body>
</html>
