<nav id="navbar">
    <div class="container">
        <div class="navbar-inner">
            <!-- Logo -->
            <a href="#hero" class="navbar-logo">
                <img src="{{ asset('images/logo-gsg-new.png') }}"
                     alt="Gaharu Sempana Group"
                     class="navbar-logo-img">
                <div class="logo-text">
                    <span class="logo-title">GAHARU SEMPANA GROUP</span>
                    <span class="logo-sub">Konsultan Perencana &amp; Pengawas</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <ul class="navbar-menu">
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#portfolio">Portofolio</a></li>
                <li><a href="#mitra">Klien</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>

            <!-- Right Area -->
            <div class="navbar-right">
                <!-- Company Switcher -->
                <div class="company-switcher" id="companySwitcher">
                    <button class="switcher-btn active" data-company="gsg" onclick="switchCompany('gsg')">PT. Gaharu Sempana</button>
                    <button class="switcher-btn" data-company="kak" onclick="switchCompany('kak')">PT. Kencana Adhi Karma</button>
                </div>
                <!-- Mobile Toggle -->
                <button class="navbar-toggle" id="navToggle" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="#hero" class="mobile-nav-link">Beranda</a>
        <a href="#tentang" class="mobile-nav-link">Tentang Kami</a>
        <a href="#layanan" class="mobile-nav-link">Layanan</a>
        <a href="#portfolio" class="mobile-nav-link">Portofolio</a>
        <a href="#mitra" class="mobile-nav-link">Klien</a>
        <a href="#kontak" class="mobile-nav-link">Kontak</a>
        <div class="mobile-company-switch">
            <button class="switcher-btn active" data-company="gsg" onclick="switchCompany('gsg')">GSG</button>
            <button class="switcher-btn" data-company="kak" onclick="switchCompany('kak')">KAK</button>
        </div>
    </div>
</nav>
