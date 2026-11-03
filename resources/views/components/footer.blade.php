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
                <li>📍 Sikucur Timur, Kecamatan V Koto Kampung Dalam, Kabupaten Padang Pariaman, Sumatera Barat.</li>
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
