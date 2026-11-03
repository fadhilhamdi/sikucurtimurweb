<!DOCTYPE html>
<html>
<head>
    <title>UMKM Nagari Sikucur Timur</title>
    <link rel="stylesheet" href="{{ asset('css/umkm.css') }}">
    <!-- Favicon -->
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
$umkm = [
    [
        'slug'=>'juadah',
        'nama'=>'Juadah',
        'desc'=>'Kue tradisional Minangkabau berbahan ketan dengan cita rasa manis legit dan nilai budaya yang kuat.',
        'gambar'=>'/images/umkm/juadah.jpeg'
    ],
    [
        'slug'=>'pinang',
        'nama'=>'Pinang',
        'desc'=>'Komoditas hasil bumi lokal bernilai ekonomi tinggi yang mendukung usaha dan penghasilan masyarakat nagari.',
        'gambar'=>'/images/umkm/pinang.jpeg'
    ],
];
@endphp

<section class="grid">

@foreach($umkm as $u)
<a href="/umkm/{{ $u['slug'] }}" class="card">

    <img src="{{ $u['gambar'] }}">

    <div class="overlay">
        <h3>{{ $u['nama'] }}</h3>
        <p>{{ $u['desc'] }}</p>
    </div>

</a>
@endforeach

</section>

@include('components.footer')

</body>
</html>
