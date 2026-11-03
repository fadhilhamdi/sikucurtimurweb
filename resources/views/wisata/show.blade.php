<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Wisata</title>
    <link rel="stylesheet" href="{{ asset('css/wisata.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-kkn.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body class="wisata-page">

@include('components.navbar')

@php
$data = [
    'Langkuik-Indah' => [
        'judul' => 'Langkuik Indah',
        'lokasi' => 'Nagari Sikucur Timur',
        'gambar' => '/images/wisata/Langkuik Indah.jpeg',
        'isi' => "🌿 Langkuik Indah
                    Langkuik Indah merupakan objek wisata alam air terjun yang berada di Nagari Sikucur Timur, Kabupaten Padang Pariaman. Destinasi ini dikenal dengan suasana alamnya yang masih asri, aliran air yang jernih, serta lingkungan hijau yang menenangkan.

                    ✨ Daya Tarik
                    ✔ Air terjun dan sungai alami dengan suasana hutan tropis
                    ✔ Nuansa pedesaan khas Sumatera Barat yang sejuk dan tenang
                    ✔ Bagian dari potensi wisata alam Sikucur Timur bersama destinasi air terjun lainnya

                    📍 Lokasi
                    V Koto Kampung Dalam, Nagari Sikucur Timur, Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat.

                    🌳 Aktivitas
                    ✔ Menikmati keindahan dan gemericik air terjun
                    ✔ Foto dan piknik santai
                    ✔ Jalan-jalan alam melihat vegetasi pedesaan

                    ℹ️ Informasi Tambahan
                    Langkuik Indah masih dalam tahap pengembangan, sehingga fasilitas wisata masih terbatas. Destinasi ini cocok bagi pengunjung yang mencari wisata alam tersembunyi dan jauh dari keramaian.",
                                    
                    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.576516806414!2d100.15232637431644!3d-0.44669729999999663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd519bce7ace5d7%3A0x19d4dbc90306e71d!2sWisata%20Air%20Terjun%20Langkuik%20Indah%20Pangguang!5e0!3m2!1sid!2sid!4v1770028886755!5m2!1sid!2sid'

    ],


    'Pincuran-Maruok' => [
        'judul' => 'Pincuran Maruok',
        'lokasi' => 'Nagari Sikucur Timur',
        'gambar' => '/images/wisata/Pincuran Maruok.jpg',
        'isi' => "Pincuran Maruok merupakan salah satu destinasi wisata air yang terkenal di Nagari Sikucur Timur. Lokasi ini merupakan kawasan kolam renang alami dan pemandian mata air yang menawarkan pengalaman menikmati air yang segar, sejuk, dan jernih di tengah suasana alam yang hijau dan damai.

🌿 Daya Tarik Wisata

✨ Kolam renang alami dari mata air pegunungan
Pincuran Maruok merupakan hasil pembenahan dari kolam ikan yang kemudian dikembangkan menjadi tempat pemandian umum. Airnya bersumber dari mata air yang alami sehingga terasa sejuk dan familiar bagi pengunjung.
✨ Area pemandian untuk berbagai usia
Terdapat beberapa kolam dengan kedalaman dan tingkat yang berbeda-beda, sehingga cocok dikunjungi oleh anak-anak, remaja, maupun dewasa.
✨ Lingkungan alam yang hijau sekitar kolam
Pengunjung dapat menikmati pemandangan alam yang hijau serta pepohonan di sekeliling area pemandian, menciptakan suasana yang menenangkan.
✨ Spot bermain dan sederhana
Meskipun fasilitasnya masih sederhana, terdapat perosotan dan area untuk bermain air yang menambah keseruan kunjungan.

🧭 Akses & Tips Kunjungan

📍 Lokasi wisata ini berada di kawasan Kampung Tengah, Nagari Sikucur Timur dan dapat dijangkau sekitar ±40 menit dari pusat Kota Pariaman dengan kendaraan.

🧳 Tips:
✔ Datang pada hari libur atau akhir pekan untuk pengalaman yang lebih ramai.
✔ Kenakan pakaian yang sesuai untuk berenang atau bermain air.
✔ Sediakan kamera atau smartphone karena spotnya cocok untuk foto santai.

💡 Informasi Tambahan
✔ Asal tempat wisata ini adalah kolam ikan yang kemudian dikembangkan menjadi kolam pemandian umum oleh pemilik setempat sekitar 5 tahun yang lalu.
✔ Pada musim liburan atau menjelang Ramadan, lokasi ini biasanya ramai dikunjungi wisatawan dari berbagai daerah di Sumatera Barat.
✔ Biasanya pengunjung dikenai tiket masuk nominal kecil untuk membantu pengelolaan fasilitas.",
        'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6853193947145!2d100.18446507521432!3d-0.46783169952758136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd5193b6c4107bf%3A0x9252a8ea53ac1e61!2sPemandian%20kolam%20renang%20pincuran%20maruok!5e0!3m2!1sid!2sid!4v1770026757172!5m2!1sid!2sid'
    ],
   
    'Pincuran-Tujuah' => [
        'judul' => 'Pincuran Tujuah',
        'lokasi' => 'Nagari Sikucur Timur',
        'gambar' => '/images/wisata/Pincuran Tujuah.jpg',
        'isi' => "Pincuran Tujuah adalah salah satu objek wisata alam berupa pemandian air alam yang terletak di Nagari Sikucur Timur. Tempat ini dikenal oleh masyarakat setempat sebagai lokasi wisata tradisional yang asri dengan suasana alami khas pedesaan.

🌿 Daya Tarik Wisata
✔ Udara sejuk dan lingkungan hijau yang menenangkan di sekitar kawasan air pemandian.
✔ Air mata air yang jernih mengalir dan membentuk kolam pemandian alami.
✔ Lokasi ini juga dikenal sebagai tempat mandi masyarakat setempat, bahkan sejak lama dipercaya memiliki khasiat tertentu oleh penduduk acara tradisional.

🧭 Aktivitas yang Bisa Dilakukan
Pengunjung yang datang ke Pincuran Tujuah biasanya melakukan:
Berenang dan mandi air alami di kolam pemandian yang terbentuk dari aliran mata air.
Nikmati suasana alam di tengah pepohonan dan sungai kecil yang jernih.
Foto dan rekreasi keluarga di kawasan yang masih alami dan belum terlalu ramai fasilitas.

📍 Akses & Arah
Lokasi Pincuran Tujuah berada di wilayah Nagari Sikucur Timur yang dikelola dan dibersihkan oleh masyarakat setempat sebagai bagian dari pengembangan potensi desa wisata. Untuk mencapai lokasi wisata ini biasanya diperlukan jalan kaki ringan melalui areal alam yang asri.

ℹ️ Informasi Tambahan
Destinasi ini merupakan bagian dari potensi wisata alam yang sedang dikembangkan di Nagari Sikucur Timur, dengan upaya masyarakat dan pemerintahan setempat untuk memperbaiki akses jalan serta fasilitas dasar di kawasan tersebut.",
   
'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127669.7388451663!2d100.0301004972656!3d-0.4782342999999909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd51900284beff9%3A0x3e39b1e1a1e89e0b!2sObjek%20Wisata%20Pincuran%20Tujuah!5e0!3m2!1sid!2sid!4v1770030143236!5m2!1sid!2sid' 
],
];

$wisata = $data[$slug] ?? null;
@endphp

@if($wisata)
<div class="wisata-detail">
    <img src="{{ $wisata['gambar'] }}" alt="{{ $wisata['judul'] }}">
    <h1>{{ $wisata['judul'] }}</h1>
    <span class="lokasi">📍 {{ $wisata['lokasi'] }}</span>

    <div class="wisata-desc">
        {!! nl2br($wisata['isi']) !!}
    </div>
<!-- MAP TARUH DI SINI -->
@if(!empty($wisata['map']))
<div class="wisata-map">
    <h3>Lokasi di Google Maps</h3>
    <iframe 
        src="{{ $wisata['map'] }}"
        width="100%"
        height="350"
        style="border:0;border-radius:14px;"
        allowfullscreen
        loading="lazy">
    </iframe>
</div>

@endif
    <a href="{{ route('wisata.index') }}" class="back-link">
        ← Kembali ke Wisata
    </a>
</div>
@else
<p style="text-align:center;margin-top:120px;">
    Wisata tidak ditemukan.
</p>
@endif

@include('components.footer')

</body>
</html>
