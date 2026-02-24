<section id="mitra" class="section-padding">
    <div class="container">
        <div class="mitra-header" data-aos="fade-up">
            <div class="section-label">Mitra Kami</div>
            <h2 class="section-title">Dipercaya oleh <span class="text-gradient">Pemerintah & Institusi</span></h2>
            <p class="section-subtitle" style="margin:0 auto;">
                Kami telah berkolaborasi dengan berbagai instansi pemerintah daerah, kementerian, universitas, dan rumah sakit di seluruh Bali dan Indonesia.
            </p>
        </div>

        @php
        $mitras = [
            ['name' => 'Pemerintah Provinsi Bali',          'icon' => 'fa-landmark'],
            ['name' => 'Kota Denpasar',                     'icon' => 'fa-city'],
            ['name' => 'Kab. Badung',                       'icon' => 'fa-map'],
            ['name' => 'Kab. Gianyar',                      'icon' => 'fa-map-marked'],
            ['name' => 'Kab. Tabanan',                      'icon' => 'fa-map-marked-alt'],
            ['name' => 'Kab. Bangli',                       'icon' => 'fa-map-pin'],
            ['name' => 'Kab. Jembrana',                     'icon' => 'fa-anchor'],
            ['name' => 'Kab. Buleleng',                     'icon' => 'fa-compass'],
            ['name' => 'Kab. Karangasem',                   'icon' => 'fa-mountain'],
            ['name' => 'Kab. Klungkung',                    'icon' => 'fa-crown'],
            ['name' => 'Kementerian PUPR',                  'icon' => 'fa-hard-hat'],
            ['name' => 'Kementerian Kesehatan',              'icon' => 'fa-heartbeat'],
            ['name' => 'Kementerian Perdagangan',            'icon' => 'fa-store'],
            ['name' => 'Kementerian Keuangan',               'icon' => 'fa-university'],
            ['name' => 'Universitas Udayana',                'icon' => 'fa-graduation-cap'],
            ['name' => 'Universitas Warmadewa',              'icon' => 'fa-book'],
            ['name' => 'Bank BPD Bali',                     'icon' => 'fa-piggy-bank'],
            ['name' => 'RSUD Sanjiwani Gianyar',            'icon' => 'fa-hospital'],
            ['name' => 'RSU Tabanan',                       'icon' => 'fa-hospital-alt'],
            ['name' => 'RSUD Buleleng',                     'icon' => 'fa-clinic-medical'],
        ];
        // Duplicate for seamless loop
        $allMitras = array_merge($mitras, $mitras);
        @endphp

        <div class="marquee-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="marquee-track">
                @foreach($allMitras as $m)
                <div class="mitra-card">
                    <div>
                        <i class="fas {{ $m['icon'] }} mitra-icon"></i>
                        <div class="mitra-name">{{ $m['name'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
