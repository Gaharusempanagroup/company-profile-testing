@extends('layouts.app')

@section('title', 'Gaharu Sempana Group - Konsultan Perencana & Pengawas')

@section('content')
    @include('partials.navbar', ['group' => $group])

    @include('partials.hero', ['group' => $group])

    @include('partials.tentang', ['group' => $group])

    @include('partials.visi-misi')

    @include('partials.layanan')

    @include('partials.portfolio', ['portfolio' => $portfolio])

    @include('partials.mitra')

    @include('partials.kontak')

    <footer>
        <div class="container">
            <div class="footer-inner">
                <p class="footer-copy">&copy; {{ date('Y') }} Gaharu Sempana Group. All rights reserved.</p>
                <div class="footer-links">
                    <a href="#hero" data-id="Beranda" data-en="Home">Beranda</a>
                    <a href="#tentang" data-id="Tentang Kami" data-en="About Us">Tentang Kami</a>
                    <a href="#layanan" data-id="Layanan" data-en="Services">Layanan</a>
                    <a href="#portfolio" data-id="Karya" data-en="Portfolio">Karya</a>
                    <a href="#kontak" data-id="Kontak" data-en="Contact">Kontak</a>
                </div>
            </div>
        </div>
    </footer>
@endsection