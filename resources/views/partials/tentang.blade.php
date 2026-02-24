<section id="tentang" class="section-padding">
    <div class="container">
        @php $gsg = $companies['gsg']; $kak = $companies['kak']; @endphp

        {{-- GSG Profile --}}
        <div class="company-section active" id="tentang-gsg">
            <div class="tentang-grid">
                <div data-aos="fade-right">
                    <div class="tentang-image-wrap">
                        <img src="{{ asset('images/about-bg.png') }}" alt="PT. Gaharu Sempana - Tim Profesional">
                        <div class="tentang-badge-float">
                            <div class="icon"><i class="fas fa-award"></i></div>
                            <div class="info">
                                <div class="num">30+</div>
                                <div class="label">Tahun Berpengalaman</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="section-label">Tentang Kami</div>
                    <!-- Company Logo inline left of title -->
                    <div class="company-title-row">
                        <div class="company-logo-wrap">
                            <img src="{{ asset('images/logo-gaharu-sempana.png') }}"
                                 alt="Logo PT. Gaharu Sempana"
                                 class="company-logo-img">
                        </div>
                        <h2 class="section-title" style="margin-bottom:0;">PT. <span class="text-gradient">Gaharu Sempana</span></h2>
                    </div>
                    <p class="section-subtitle">{{ $gsg['description'] }}</p>

                    <div class="company-meta">
                        <div class="meta-pill"><i class="fas fa-calendar"></i> Berdiri {{ $gsg['established'] }}</div>
                        <div class="meta-pill"><i class="fas fa-map-marker-alt"></i> Denpasar, Bali</div>
                        <div class="meta-pill"><i class="fas fa-shield-alt"></i> {{ $gsg['identity'] }}</div>
                    </div>

                    <p style="font-size:14px;color:var(--text-mid);font-style:italic;margin-bottom:8px;">
                        <i class="fas fa-quote-left" style="color:var(--gold);margin-right:6px;"></i>
                        <strong>Direktur:</strong> {{ $gsg['director'] }}
                    </p>
                    <p style="font-size:13px;color:var(--text-light);">{{ $gsg['notary'] }}</p>

                    <div class="values-grid">
                        @foreach($gsg['values'] as $v)
                        <div class="value-card">
                            <div class="icon">
                                @if($v['icon'] === 'innovation') <i class="fas fa-lightbulb"></i>
                                @elseif($v['icon'] === 'collaborate') <i class="fas fa-handshake"></i>
                                @elseif($v['icon'] === 'adapt') <i class="fas fa-sync-alt"></i>
                                @else <i class="fas fa-star"></i>
                                @endif
                            </div>
                            <h4>{{ $v['title'] }}</h4>
                            <p>{{ $v['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="stats-row">
                        @foreach($gsg['stats'] as $s)
                        <div class="stat-item">
                            <div class="stat-value">{{ $s['value'] }}</div>
                            <div class="stat-label">{{ $s['label'] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- KAK Profile --}}
        <div class="company-section" id="tentang-kak">
            <div class="tentang-grid">
                <div data-aos="fade-right">
                    <div class="tentang-image-wrap">
                        <img src="{{ asset('images/about-bg.png') }}" alt="PT. Kencana Adhi Karma - Tim Profesional">
                        <div class="tentang-badge-float">
                            <div class="icon"><i class="fas fa-award"></i></div>
                            <div class="info">
                                <div class="num">35+</div>
                                <div class="label">Tahun Berpengalaman</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="section-label">Tentang Kami</div>
                    <!-- Company Logo inline left of title -->
                    <div class="company-title-row">
                        <div class="company-logo-wrap">
                            <img src="{{ asset('images/logo-kencana-adhi-karma.png') }}"
                                 alt="Logo PT. Kencana Adhi Karma"
                                 class="company-logo-img">
                        </div>
                        <h2 class="section-title" style="margin-bottom:0;">PT. <span class="text-gradient">Kencana Adhi Karma</span></h2>
                    </div>
                    <p class="section-subtitle">{{ $kak['description'] }}</p>

                    <div class="company-meta">
                        <div class="meta-pill"><i class="fas fa-calendar"></i> Berdiri {{ $kak['established'] }}</div>
                        <div class="meta-pill"><i class="fas fa-map-marker-alt"></i> Denpasar, Bali</div>
                        <div class="meta-pill"><i class="fas fa-shield-alt"></i> {{ $kak['identity'] }}</div>
                    </div>

                    <p style="font-size:14px;color:var(--text-mid);font-style:italic;margin-bottom:8px;">
                        <i class="fas fa-quote-left" style="color:var(--gold);margin-right:6px;"></i>
                        <strong>Direktris:</strong> {{ $kak['director'] }}
                    </p>
                    <p style="font-size:13px;color:var(--text-light);">{{ $kak['notary'] }}</p>

                    <div class="values-grid">
                        @foreach($kak['values'] as $v)
                        <div class="value-card">
                            <div class="icon">
                                @if($v['icon'] === 'innovation') <i class="fas fa-lightbulb"></i>
                                @elseif($v['icon'] === 'collaborate') <i class="fas fa-handshake"></i>
                                @elseif($v['icon'] === 'adapt') <i class="fas fa-sync-alt"></i>
                                @else <i class="fas fa-star"></i>
                                @endif
                            </div>
                            <h4>{{ $v['title'] }}</h4>
                            <p>{{ $v['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="stats-row">
                        @foreach($kak['stats'] as $s)
                        <div class="stat-item">
                            <div class="stat-value">{{ $s['value'] }}</div>
                            <div class="stat-label">{{ $s['label'] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
