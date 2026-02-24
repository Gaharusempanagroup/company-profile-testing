@extends('layouts.app')

@section('title', 'Gaharu Sempana Group - Konsultan Perencana & Pengawas')

@section('content')
    @include('partials.navbar', ['companies' => $companies])

    @include('partials.hero', ['companies' => $companies])

    @include('partials.tentang', ['companies' => $companies])

    @include('partials.layanan')

    @include('partials.portfolio', ['companies' => $companies])

    @include('partials.mitra')

    @include('partials.kontak')

    <footer>
        <div class="container">
            <div class="footer-inner">
                <p class="footer-copy">&copy; {{ date('Y') }} Gaharu Sempana Group. All rights reserved.</p>
                <div class="footer-links">
                    <a href="#hero">Beranda</a>
                    <a href="#tentang">Tentang Kami</a>
                    <a href="#layanan">Layanan</a>
                    <a href="#portfolio">Portofolio</a>
                    <a href="#kontak">Kontak</a>
                </div>
            </div>
        </div>
    </footer>
@endsection
