<section id="mitra" class="section-padding">
    <div class="container">
        <div class="mitra-header" data-aos="fade-up">
            <div class="section-label" data-id="Mitra Kami" data-en="Our Partners">Mitra Kami</div>
            <h2 class="section-title">
                <span data-id="Dipercaya oleh " data-en="Trusted by ">Dipercaya oleh </span>
                <span class="text-gradient" data-id="Pemerintah &amp; Institusi" data-en="Government &amp; Institutions">Pemerintah &amp; Institusi</span>
            </h2>
            <p class="section-subtitle" style="margin:0 auto;" data-id="Kami telah berkolaborasi dengan berbagai instansi pemerintah daerah, kementerian, universitas, dan rumah sakit di seluruh Bali dan Indonesia." data-en="We have collaborated with various regional government agencies, ministries, universities, and hospitals throughout Bali and Indonesia.">
                Kami telah berkolaborasi dengan berbagai instansi pemerintah daerah, kementerian, universitas, dan rumah
                sakit di seluruh Bali dan Indonesia.
            </p>
        </div>

        @php
            $mitras = [
                ['name' => 'Pemerintah Provinsi Bali', 'icon' => 'fa-landmark', 'image' => 'Logo Provinsi Bali.png'],
                ['name' => 'Kota Denpasar', 'icon' => 'fa-city', 'image' => 'Lambang_Kota_Denpasar.png'],
                ['name' => 'Kab. Badung', 'icon' => 'fa-map', 'image' => 'Lambang_Kabupaten_Badung.png'],
                ['name' => 'Kab. Gianyar', 'icon' => 'fa-map-marked', 'image' => 'Lambang_Gianyar.png'],
                ['name' => 'Kab. Tabanan', 'icon' => 'fa-map-marked-alt', 'image' => 'Lambang_Kabupaten_Tabanan.png'],
                ['name' => 'Kab. Bangli', 'icon' => 'fa-map-pin', 'image' => 'Lambang_Kab_Bangli.png'],
                ['name' => 'Kab. Jembrana', 'icon' => 'fa-anchor', 'image' => 'Lambang_Kab_Jembrana.png'],
                ['name' => 'Kab. Buleleng', 'icon' => 'fa-compass', 'image' => 'Lambang_Kabupaten_Buleleng.png'],
                ['name' => 'Kab. Karangasem', 'icon' => 'fa-mountain', 'image' => 'Lambang_Kabupaten_Karangasem.png'],
                ['name' => 'Kab. Klungkung', 'icon' => 'fa-crown', 'image' => 'Lambang_Kabupaten_Klungkung.png'],
                ['name' => 'Kementerian PUPR', 'icon' => 'fa-hard-hat', 'image' => 'Logo_PUPR.png'],
                ['name' => 'Kementerian Kesehatan', 'icon' => 'fa-heartbeat', 'image' => 'Logo_Kementerian_Kesehatan_Republik_Indonesia_(2024_rev).png'],
                ['name' => 'Kementerian Perdagangan', 'icon' => 'fa-store', 'image' => 'Kementerian Perdagangan (Kemendag) Republik Indonesia.png'],
                ['name' => 'Kementerian Keuangan', 'icon' => 'fa-university', 'image' => 'Logo_kementerian_keuangan_republik_indonesia.png'],
                ['name' => 'Universitas Udayana', 'icon' => 'fa-graduation-cap', 'image' => 'Logo-unud-baru.png'],
                ['name' => 'Universitas Warmadewa', 'icon' => 'fa-book', 'image' => 'Universitas Warmadewa.png'],
                ['name' => 'Bank BPD Bali', 'icon' => 'fa-piggy-bank', 'image' => 'bank-bpd-bali.png'],
                ['name' => 'RSUD Sanjiwani Gianyar', 'icon' => 'fa-hospital', 'image' => 'logo_RSUD_Sanjiwani.jpg'],
                ['name' => 'RSUD Tabanan', 'icon' => 'fa-hospital-alt', 'image' => 'logo_RSUD_Tabanan.png'],
                ['name' => 'RSUD Buleleng', 'icon' => 'fa-clinic-medical', 'image' => 'Logo RSUD Kabupaten Buleleng.png'],
                ['name' => 'INKINDO', 'icon' => 'fa-clinic-medical', 'image' => 'Logo_Inkindo.png'],
                ['name' => 'Rumah Luwih Bali', 'icon' => 'fa-clinic-medical', 'image' => 'Rumah Luwih Bali.jpg'],
            ];
            // Duplicate for seamless loop
            $allMitras = array_merge($mitras, $mitras);
        @endphp

        <div class="marquee-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="marquee-track">
                @foreach($allMitras as $m)
                    <div class="mitra-card">
                        <div>
                            @if(isset($m['image']))
                                <img src="{{ asset('images/' . $m['image']) }}" alt="{{ $m['name'] }}" class="mitra-logo-img">
                            @else
                                <i class="fas {{ $m['icon'] }} mitra-icon"></i>
                            @endif
                            <div class="mitra-name">{{ $m['name'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>