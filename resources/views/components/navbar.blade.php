<!-- ================= NAVBAR ================= -->
<header class="navbar">
    <a href="/" class="brand-link">
    <div class="brand">
        <img src="{{ asset('images/logo-pp.png') }}" alt="Logo Nagari">
        <div class="brand-text">
            <strong>Nagari Sikucur Timur</strong>
            <span>Kabupaten Padang Pariaman</span>
        </div>
    </div>
</a>

  <nav>

    <a href="/"
       class="{{ request()->routeIs('home') || request()->is('/') ? 'active' : '' }}">
        Home
    </a>

    <a href="{{ route('profil.nagari') }}"
       class="{{ request()->routeIs('profil.nagari') ? 'active' : '' }}">
        Profil Nagari
    </a>

    <a href="{{ route('umkm.index') }}"
       class="{{ request()->routeIs('umkm.*') ? 'active' : '' }}">
        UMKM
    </a>

    <a href="{{ route('wisata.index') }}"
       class="{{ request()->routeIs('wisata.*') ? 'active' : '' }}">
        Wisata
    </a>

    <a href="{{ route('kegiatan.index') }}"
       class="{{ request()->routeIs('kegiatan.*') ? 'active' : '' }}">
        Kegiatan
    </a>

    <a href="{{ url('/about') }}"
       class="{{ request()->is('about') ? 'active' : '' }}">
        About Us
    </a>

</nav>


</header>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});
</script>
