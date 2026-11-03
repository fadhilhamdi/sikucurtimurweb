<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Kegiatan</title>
    <link rel="stylesheet" href="{{ asset('css/kegiatan.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-kkn.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

@include('components.navbar')

@php
    $data = [
        'SIGIBER & Anti Bullying1' => [
            'judul' => 'SIGIBER & Anti Bullying',
            'gambar' => '/images/kegiatan/sigiber1.jpg',
            'isi' => "Kegiatan SIGIBER (Sikat Gigi Bersama) dan Anti Bullying merupakan program edukatif yang dilaksanakan di SDN 27 V Koto Kampung Dalam pada 8 dan 9 Januari 2025. Kegiatan ini bertujuan untuk meningkatkan kesadaran siswa terhadap pentingnya menjaga kesehatan gigi dan mulut sejak usia dini, sekaligus menanamkan nilai-nilai perilaku saling menghargai dan bebas dari perundungan (bullying) di lingkungan sekolah.\n
                        Dalam kegiatan SIGIBER, para siswa diajak untuk mempraktikkan cara menyikat gigi yang benar dan teratur, disertai dengan penyuluhan mengenai dampak buruk kebersihan gigi yang kurang terjaga. Sementara itu, pada sesi Anti Bullying, siswa diberikan pemahaman tentang jenis-jenis bullying, dampak negatifnya bagi korban maupun pelaku, serta pentingnya menciptakan lingkungan sekolah yang aman, nyaman, dan ramah bagi semua.\n
                        Melalui kegiatan ini, diharapkan siswa SDN 27 V Koto Kampung Dalam tidak hanya memiliki kebiasaan hidup sehat, tetapi juga mampu menerapkan sikap saling menghormati, empati, dan kerja sama dalam kehidupan sehari-hari, baik di sekolah maupun di lingkungan masyarakat."
],
        
        'Sosialisasi Stunting & MCU1' => [
            'judul' => 'Sosialisasi Stunting & MCU',
            'gambar' => '/images/kegiatan/stunting1.jpeg',
            'isi' => "Hilalang pada tanggal 14 Januari 2025. Kegiatan ini bertujuan untuk meningkatkan kesadaran masyarakat, khususnya ibu hamil dan orang tua balita, mengenai pentingnya pencegahan stunting sejak dini serta pemantauan kesehatan secara berkala melalui Medical Check Up (MCU).\n
                        Dalam kegiatan sosialisasi stunting, peserta diberikan pemahaman tentang pengertian stunting, faktor penyebab, dampak jangka panjang terhadap pertumbuhan dan perkembangan anak, serta upaya pencegahan melalui pola asuh yang tepat, pemenuhan gizi seimbang, dan sanitasi yang baik. Sementara itu, kegiatan MCU dilakukan untuk memantau kondisi kesehatan masyarakat sebagai langkah deteksi dini terhadap masalah kesehatan.\n
                        Melalui kegiatan ini, diharapkan masyarakat Posyandu Simpang Koto Hilalang dapat lebih memahami pentingnya menjaga kesehatan ibu dan anak, serta mampu menerapkan pola hidup sehat guna mendukung terciptanya generasi yang sehat, cerdas, dan berkualitas di masa mendatang."
],

        'SIGIBER & Anti Bullying2' => [
            'judul' => 'SIGIBER & Anti Bullying',
            'gambar' => '/images/kegiatan/sigiber2.jpg',
            'isi' => "Kegiatan SIGIBER (Sikat Gigi Bersama) dan Anti Bullying dilaksanakan di SDN 07 V Koto Kampung Dalam pada tanggal 14 dan 15 Januari 2025 sebagai bentuk upaya pembinaan kesehatan dan karakter siswa sejak usia dini. Kegiatan ini difokuskan pada pembiasaan perilaku hidup bersih sekaligus penguatan sikap saling menghargai di lingkungan sekolah.\n
                        Pada pelaksanaan SIGIBER, siswa diberikan pendampingan langsung dalam mempraktikkan teknik menyikat gigi yang baik dan benar, serta penjelasan mengenai pentingnya menjaga kebersihan gigi dan mulut untuk mencegah berbagai gangguan kesehatan. Selain itu, kegiatan Anti Bullying disampaikan melalui edukasi interaktif yang menekankan pemahaman tentang perilaku perundungan, dampaknya terhadap psikologis siswa, serta cara bersikap positif terhadap sesama teman.\n
                        Melalui kegiatan ini, diharapkan siswa SDN 07 V Koto Kampung Dalam dapat menerapkan kebiasaan hidup sehat dan menunjukkan perilaku yang lebih peduli, toleran, serta mampu menciptakan suasana sekolah yang aman, nyaman, dan mendukung proses belajar mengajar."
        ],

         'Sosialisasi Stunting & MCU2' => [
            'judul' => 'Sosialisasi Stunting & MCU',
            'gambar' => '/images/kegiatan/stunting2.jpeg',
            'isi' => "Sosialisasi Stunting & MCU merupakan kegiatan kesehatan masyarakat yang dilaksanakan di Posyandu Simpang Tiga Paladangan pada tanggal 15 Januari 2025. Kegiatan ini bertujuan untuk memberikan edukasi kepada masyarakat mengenai pentingnya pencegahan stunting serta pemantauan kondisi kesehatan secara rutin sebagai upaya meningkatkan kualitas hidup keluarga.\n
                    Dalam kegiatan ini, peserta memperoleh informasi terkait faktor risiko stunting, dampaknya terhadap pertumbuhan anak, serta langkah-langkah pencegahan melalui pemenuhan gizi seimbang dan pola hidup sehat. Selain itu, kegiatan Medical Check Up (MCU) dilakukan untuk mengetahui kondisi kesehatan masyarakat secara umum serta sebagai sarana deteksi dini terhadap gangguan kesehatan.\n
                    Melalui pelaksanaan kegiatan ini, diharapkan masyarakat Posyandu Simpang Tiga Paladangan dapat lebih peduli terhadap kesehatan ibu dan anak, serta mampu menerapkan kebiasaan hidup sehat secara berkelanjutan demi mendukung terciptanya generasi yang sehat dan berkualitas."
        ],
        'Sosialisasi Penyuluhan Hukum' => [
            'judul' => 'Sosialisasi Penyuluhan Hukum',
            'gambar' => '/images/kegiatan/hukum.jpeg',
            'isi' => "Sosialisasi Penyuluhan Hukum Terkait Narkotika dan Judi Online merupakan kegiatan edukatif yang dilaksanakan bersama Kejaksaan Negeri Pariaman di Mesjid Raya Nurul Ikhlas pada tanggal 22 Januari 2025. Kegiatan ini bertujuan untuk meningkatkan pemahaman masyarakat mengenai bahaya penyalahgunaan narkotika dan praktik judi online dari sisi hukum maupun dampaknya terhadap kehidupan sosial.\n
                        Dalam kegiatan ini, peserta diberikan penjelasan mengenai jenis-jenis pelanggaran hukum yang berkaitan dengan narkotika dan judi online, sanksi hukum yang dapat dikenakan, serta dampak negatif yang ditimbulkan bagi individu, keluarga, dan lingkungan masyarakat. Penyuluhan ini juga menekankan pentingnya kesadaran hukum sebagai langkah pencegahan terhadap tindak kejahatan.\n
                        Melalui kegiatan ini, diharapkan masyarakat dapat lebih memahami konsekuensi hukum dari penyalahgunaan narkotika dan judi online, serta berperan aktif dalam menciptakan lingkungan yang aman, tertib, dan bebas dari perilaku yang melanggar hukum."
        ],

        'Sosialisasi TOGA & Screening Prolanis' => [
            'judul' => 'Sosialisasi TOGA & Screening Prolanis',
            'gambar' => '/images/kegiatan/toga.jpeg',
            'isi' => "Sosialisasi TOGA (Tanaman Obat Keluarga) dan Screening Prolanis merupakan kegiatan kesehatan masyarakat yang dilaksanakan bersama Puskesmas di Posyandu Koto Hilalang pada tanggal 24 Januari 2025. Kegiatan ini bertujuan untuk meningkatkan pengetahuan masyarakat mengenai pemanfaatan tanaman obat keluarga sebagai upaya pencegahan dan perawatan kesehatan secara mandiri.\n
                    Selain sosialisasi TOGA, kegiatan ini juga diisi dengan Screening Prolanis (Program Pengelolaan Penyakit Kronis) yang meliputi pemeriksaan kesehatan dasar bagi masyarakat, khususnya penderita penyakit kronis seperti hipertensi dan diabetes. Pemeriksaan ini bertujuan untuk memantau kondisi kesehatan serta mendorong pola hidup sehat secara berkelanjutan.\n
                    Melalui kegiatan ini, diharapkan masyarakat semakin sadar akan pentingnya menjaga kesehatan sejak dini, memanfaatkan potensi tanaman obat di lingkungan sekitar, serta rutin melakukan pemeriksaan kesehatan guna meningkatkan kualitas hidup dan kesejahteraan masyarakat."
        ],

        'Pencatatan Perkawinan' => [
            'judul' => 'Pencatatan Perkawinan',
            'gambar' => '/images/kegiatan/perkawinan.jpg',
            'isi' => "Pencatatan perkawinan adalah proses administratif yang dilakukan oleh negara untuk mencatat dan mengesahkan suatu perkawinan agar diakui secara hukum. Di Indonesia, pencatatan dilakukan di Kantor Urusan Agama (KUA) bagi pasangan beragama Islam dan di Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil) bagi non-Islam. Hasil pencatatan ini berupa Buku Nikah atau Akta Perkawinan sebagai bukti sah secara hukum.\n
                    Pencatatan perkawinan sangat penting karena menjadi dasar dalam berbagai urusan administrasi kependudukan, seperti pembuatan Kartu Keluarga, KTP, dan akta kelahiran anak. Selain itu, pencatatan juga berkaitan dengan hak-hak hukum, seperti warisan, asuransi, dan jaminan sosial.\n
                    Selain sebagai bukti legal, pencatatan perkawinan berfungsi melindungi hak suami, istri, dan anak. Dengan adanya pencatatan resmi, status keluarga menjadi jelas di mata hukum sehingga setiap anggota keluarga memperoleh perlindungan hukum dan kepastian hak serta kewajiban."
        ],

         'Melukis Mural' => [
            'judul' => 'Melukis Mural',
            'gambar' => '/images/kegiatan/melukis.jpeg',
            'isi' => "Kegiatan Melukis Cita-Cita di SDN 07 V Koto Kampung Dalam merupakan salah satu program kreatif dan inspiratif yang dilaksanakan bersama siswa sebagai bentuk kenang-kenangan dari tim KKN. Melalui kegiatan ini, siswa diajak menuangkan impian dan cita-cita mereka ke dalam lukisan penuh warna di media gambar yang telah disediakan.\n
                        Setiap siswa bebas menggambarkan profesi atau harapan masa depan mereka, seperti dokter, guru, polisi, atlet, maupun cita-cita lainnya. Suasana kegiatan berlangsung ceria dan penuh antusias, karena siswa dapat mengekspresikan imajinasi sekaligus berbagi cerita tentang impian mereka.\n
                        Selain melatih kreativitas dan keterampilan seni, kegiatan ini juga bertujuan untuk menumbuhkan motivasi belajar, rasa percaya diri, serta semangat meraih masa depan. Hasil lukisan yang ditinggalkan di sekolah diharapkan menjadi simbol kenangan sekaligus pengingat bahwa setiap anak memiliki mimpi besar yang dapat diwujudkan."
               ],

        'Papan Lingkungan Hidup' => [
            'judul' => 'Papan Lingkungan Hidup',
            'gambar' => '/images/kegiatan/plh.jpeg',
            'isi' => "Papan Lingkungan Hidup merupakan media edukasi yang dibuat sebagai sarana penyadaran masyarakat mengenai pentingnya menjaga kebersihan dan pengelolaan sampah. Papan ini memuat informasi tentang jenis-jenis sampah serta perkiraan waktu yang dibutuhkan untuk terurai secara alami di lingkungan.\n
                        Melalui informasi tersebut, masyarakat dapat memahami bahwa beberapa jenis sampah membutuhkan waktu yang sangat lama untuk terurai, seperti plastik yang dapat bertahan hingga ratusan tahun, kaleng aluminium hingga puluhan tahun, dan kaca yang bahkan sulit terurai sepenuhnya. Fakta ini diharapkan dapat mendorong perubahan perilaku masyarakat agar lebih bijak dalam menggunakan, memilah, dan membuang sampah.\n
                        Dengan adanya papan edukasi ini, diharapkan kesadaran warga meningkat untuk mengurangi sampah plastik, menerapkan prinsip 3R (Reduce, Reuse, Recycle), serta menjaga lingkungan nagari tetap bersih, sehat, dan nyaman bagi generasi sekarang maupun mendatang."
                 ],

        'Hasil Toga' => [
            'judul' => 'Hasil Toga',
            'gambar' => '/images/kegiatan/hasil-toga.jpeg',
            'isi' => "Kegiatan Hasil TOGA (Tanaman Obat Keluarga) dan pemasangan papan nama merupakan salah satu bentuk pengabdian mahasiswa KKN kepada masyarakat Nagari Sikucur Timur. Pada kegiatan ini, tim KKN menanam berbagai jenis tanaman obat secara langsung di lingkungan posyandu dan pekarangan warga sebagai upaya menyediakan sumber obat herbal alami yang mudah dijangkau masyarakat.\n
                        Tanaman yang dibudidayakan meliputi jahe, kunyit, serai, lengkuas, temulawak, daun sirih, dan tanaman herbal lainnya yang memiliki manfaat bagi kesehatan sehari-hari. Selain penanaman, setiap tanaman dilengkapi papan nama sebagai penanda jenis dan manfaatnya, sekaligus sebagai identitas bahwa taman TOGA tersebut merupakan hasil program kerja KKN.\n
                        Melalui kegiatan ini, diharapkan masyarakat semakin mandiri dalam menjaga kesehatan sekaligus melestarikan pemanfaatan tanaman obat di lingkungan sekitar."
             ],
    ];

    $kegiatan = $data[$slug] ?? null;
@endphp

@if($kegiatan)
<div class="detail-box">
    <img src="{{ $kegiatan['gambar'] }}">
    <h1>{{ $kegiatan['judul'] }}</h1>
   <p>{!! nl2br($kegiatan['isi']) !!}</p>


    <a href="{{ route('kegiatan.index') }}" class="back-link">
        ← Kembali ke Kegiatan
    </a>
</div>
@else
<p style="text-align:center;margin-top:100px;">
    Kegiatan tidak ditemukan.
</p>
@endif

@include('components.footer')

</body>
</html>
