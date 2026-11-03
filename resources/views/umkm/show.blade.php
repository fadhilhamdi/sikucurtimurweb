<!DOCTYPE html>
<html>
<head>
    <title>Detail UMKM</title>
    <link rel="stylesheet" href="{{ asset('css/umkm.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-kkn.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

@include('components.navbar')
<section class="hero">
    <h1>UMKM Nagari Sikucur Timur</h1>
    <p>Mendukung produk lokal & ekonomi masyarakat</p>
</section>

@php
$data = [
    'juadah'=>[
        'nama'=>'Juadah',

        // DESKRIPSI ARTIKEL PANJANG
        'desc'=>"
Juadah merupakan salah satu kue tradisional khas Minangkabau yang memiliki nilai budaya, filosofi, serta cita rasa yang kuat. Bagi masyarakat Minangkabau, juadah bukan sekadar makanan, melainkan simbol penghormatan, kebersamaan, dan ikatan kekeluargaan.

Juadah terbuat dari bahan-bahan alami seperti beras ketan, gula merah, kelapa parut, dan santan yang diolah menjadi berbagai jenis kue manis dengan tekstur kenyal dan rasa legit. Aneka kue ini biasanya disusun bertingkat dalam wadah khusus sebagai lambang harapan, doa, dan hubungan spiritual manusia dengan Tuhan.

Dalam tradisi pernikahan adat Minangkabau, juadah dibawa saat prosesi manjalang mintuo sebagai tanda penghormatan kepada keluarga mempelai laki-laki. Proses pembuatannya sering dilakukan secara gotong royong sehingga mencerminkan kebersamaan dan solidaritas masyarakat.

Kini, juadah tidak hanya dilestarikan sebagai warisan budaya, tetapi juga berkembang menjadi produk UMKM yang memiliki nilai ekonomi serta daya tarik wisata kuliner tradisional bagi pengunjung.",

        // DATA TERSTRUKTUR
        'info'=>[
            'Bahan Utama'=>[
                'Beras ketan',
                'Gula merah',
                'Kelapa parut',
                'Santan'
            ],
            'Jenis Juadah'=>[
                'Wajik / Simanis',
                'Kanji',
                'Kipang',
                'Jalabio',
                'Sangko'
            ],
            'Makna Filosofi'=>[
                'Simbol kebersamaan dan gotong royong',
                'Tanda penghormatan antar keluarga',
                'Susunan bertingkat melambangkan hubungan spiritual manusia dengan Tuhan'
            ],
            'Fungsi dalam Adat'=>[
                'Dibawa saat prosesi manjalang mintuo',
                'Hidangan pada pernikahan dan acara adat',
                'Media mempererat silaturahmi'
            ],
            'Potensi UMKM'=>[
                'Produk kuliner bernilai ekonomi',
                'Mendukung usaha masyarakat lokal',
                'Daya tarik wisata budaya dan kuliner'
            ]
        ],

       'gambar' => [
    '/images/umkm/juadah.jpeg',
    '/images/umkm/juadah2.jpg',
    '/images/umkm/juadah3.jpg',
],

'video' => '/video/juadah.mp4',

    ],

   'pinang'=>[
    'nama'=>'Pinang',

    // DESKRIPSI ARTIKEL PANJANG
    'desc'=>"
Pinang merupakan salah satu komoditas hasil bumi yang telah lama dibudidayakan oleh masyarakat di berbagai daerah Indonesia, termasuk di wilayah Nagari Sikucur Timur. Tanaman pinang (Areca catechu) dikenal sebagai tanaman palma yang buahnya memiliki banyak manfaat, baik dari sisi budaya, kesehatan tradisional, maupun nilai ekonomi.

Dalam kehidupan masyarakat, pinang sering dimanfaatkan sebagai bahan campuran dalam tradisi mengunyah sirih yang memiliki makna sosial sebagai simbol penghormatan, persaudaraan, serta penyambutan tamu. Selain itu, pinang juga digunakan sebagai bahan baku industri herbal, obat tradisional, hingga kosmetik karena kandungan senyawa alaminya yang bernilai tinggi.

Dari sisi ekonomi, pinang menjadi salah satu komoditas unggulan UMKM dengan permintaan pasar yang stabil. Proses pengolahan mulai dari pemanenan, pengeringan, hingga pengemasan membuka peluang usaha dan lapangan pekerjaan bagi masyarakat setempat.

Sebagai produk UMKM, pinang tidak hanya meningkatkan pendapatan warga, tetapi juga menjaga keberlanjutan pertanian tradisional serta memperkuat identitas lokal sebagai daerah penghasil hasil bumi berkualitas.",


    // DATA TERSTRUKTUR (otomatis tampil seperti Juadah)
    'info'=>[
        'Tentang Pinang'=>[
            'Tanaman palma yang dimanfaatkan untuk kebutuhan adat, kesehatan tradisional, dan industri'
        ],

        'Jenis Produk Pinang'=>[
            'Pinang segar',
            'Pinang kering',
            'Pinang belah',
            'Pinang olahan tradisional'
        ],

        'Manfaat Pinang'=>[
            'Digunakan dalam tradisi adat dan budaya',
            'Bahan baku obat herbal dan jamu',
            'Bahan industri kosmetik dan farmasi',
            'Komoditas perdagangan bernilai ekonomi'
        ],

        'Proses Pengolahan'=>[
            'Pemanenan buah pinang matang',
            'Pengeringan secara alami',
            'Pemilahan dan pembersihan',
            'Pengemasan untuk pemasaran'
        ],

        'Peran Pinang dalam UMKM'=>[
            'Sumber pendapatan masyarakat lokal',
            'Membuka lapangan kerja',
            'Mendukung pertanian berkelanjutan',
            'Memperkuat ekonomi nagari'
        ]
    ],

     'gambar' => [
    '/images/umkm/pinang.jpeg',
    '/images/umkm/pinang2.jpg',
    '/images/umkm/pinang3.jpeg',
],

'video' => '/video/pinang.mp4',
],
];


$item = $data[$slug] ?? null;
@endphp



@if($item)

<div class="yt-card">

    <div class="youtube-layout">

        <!-- LEFT -->
        <div class="yt-main">
            <h1 class="yt-title">{{ $item['nama'] }}</h1>

            <video controls>
                <source src="{{ $item['video'] }}" type="video/mp4">
            </video>

    <div class="yt-desc">

    {{-- Artikel paragraf --}}
    <p style="white-space: pre-line;">
        {{ $item['desc'] }}
    </p>

    {{-- Info terstruktur (khusus juadah) --}}
    @if(isset($item['info']))
        <div class="yt-info">
            @foreach($item['info'] as $title => $list)
                <h4>{{ $title }}</h4>
                <ul>
                    @foreach($list as $row)
                        <li>{{ $row }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    @endif

</div>

            <a href="/umkm" class="back">← Kembali</a>
        </div>


        <!-- RIGHT (FOTO) -->
       <div class="yt-side">
    <h3>Foto UMKM</h3>

    @foreach($item['gambar'] as $img)
        <div class="yt-thumb">
            <img src="{{ $img }}">
        </div>
    @endforeach

</div>


    </div>

</div>

@endif


@include('components.footer')

</body>
</html>
