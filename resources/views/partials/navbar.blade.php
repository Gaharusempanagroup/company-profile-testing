<nav id="navbar">
    <div class="container">
        <div class="navbar-inner">
            <!-- Logo -->
            <a href="#hero" class="navbar-logo">
                <img src="{{ asset('images/logo-gsg-new.png') }}" alt="Gaharu Sempana Group" class="navbar-logo-img">
                <div class="logo-text">
                    <span class="logo-title">GAHARU SEMPANA GROUP</span>
                    <span class="logo-sub" data-id="Konsultan Perencana &amp; Pengawas" data-en="Planning &amp; Supervision Consultant">Konsultan Perencana &amp; Pengawas</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <ul class="navbar-menu">
                <li><a href="#hero" data-id="Beranda" data-en="Home">Beranda</a></li>
                <li><a href="#tentang" data-id="Tentang Kami" data-en="About Us">Tentang Kami</a></li>
                <li><a href="#visi-misi" data-id="Visi &amp; Misi" data-en="Vision &amp; Mission">Visi &amp; Misi</a></li>
                <li><a href="#layanan" data-id="Layanan" data-en="Services">Layanan</a></li>
                <li><a href="#portfolio" data-id="Karya" data-en="Portfolio">Karya</a></li>
                <li><a href="#mitra" data-id="Mitra" data-en="Partners">Mitra</a></li>
                <li><a href="#kontak" data-id="Kontak" data-en="Contact">Kontak</a></li>
            </ul>

            <!-- Right Area -->
            <div class="navbar-right">
                <!-- Language Switcher -->
                <div class="lang-switcher" id="langSwitcher">
                    <button class="lang-btn active" data-lang="id" onclick="switchLang('id')">ID</button>
                    <button class="lang-btn" data-lang="en" onclick="switchLang('en')">ENG</button>
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
        <a href="#hero" class="mobile-nav-link" data-id="Beranda" data-en="Home">Beranda</a>
        <a href="#tentang" class="mobile-nav-link" data-id="Tentang Kami" data-en="About Us">Tentang Kami</a>
        <a href="#visi-misi" class="mobile-nav-link" data-id="Visi &amp; Misi" data-en="Vision &amp; Mission">Visi &amp; Misi</a>
        <a href="#layanan" class="mobile-nav-link" data-id="Layanan" data-en="Services">Layanan</a>
        <a href="#portfolio" class="mobile-nav-link" data-id="Karya" data-en="Portfolio">Karya</a>
        <a href="#mitra" class="mobile-nav-link" data-id="Mitra" data-en="Partners">Mitra</a>
        <a href="#kontak" class="mobile-nav-link" data-id="Kontak" data-en="Contact">Kontak</a>
        <div class="mobile-lang-switch">
            <button class="lang-btn active" data-lang="id" onclick="switchLang('id')">🇮🇩 ID</button>
            <button class="lang-btn" data-lang="en" onclick="switchLang('en')">🇬🇧 EN</button>
        </div>
    </div>
</nav>