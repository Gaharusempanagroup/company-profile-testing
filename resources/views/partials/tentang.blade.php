<section id="tentang" class="section-padding">
    <div class="container">

        <div class="company-section active" id="tentang-group">
            <div class="tentang-grid">
                <div data-aos="fade-right" class="desktop-only">
                    <div class="tentang-image-wrap">
                        <img src="{{ asset('images/foto-andre.png') }}" alt="Gaharu Sempana Group - Tim Profesional">
                        <div class="tentang-badge-float tentang-badge-float--name">
                            <div class="info">
                                <div class="num" style="font-size:13px; font-weight:700; line-height:1.3;">Ir. Putu Andre Wicaksana Putra, S.T., M.ars., IPP., CCMs.</div>
                                <div class="label" data-id="Direktur PT. Gaharu Sempana" data-en="Director, PT. Gaharu Sempana">Direktur PT. Gaharu Sempana</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="section-label" data-id="Tentang Kami" data-en="About Us">Tentang Kami</div>
                    <!-- Group Logo & Title -->
                    <div class="company-title-row">
                        <div class="company-logo-wrap">
                            <img src="{{ asset('images/logo-gaharu-sempana.PNG') }}" alt="Logo Gaharu Sempana Group"
                                class="company-logo-img">
                        </div>
                        <h2 class="section-title" style="margin-bottom:0; line-height: 1.1;">
                            <span style="white-space: nowrap;">Gaharu <span class="text-gradient">Sempana</span></span><br>
                            <span class="text-gradient">Group</span>
                        </h2>
                    </div>
                    <p class="section-subtitle" data-id="{{ $group['description_id'] }}" data-en="{{ $group['description_en'] }}">{{ $group['description_id'] }}</p>

                    <div class="company-meta">
                        <div class="meta-pill"><i class="fas fa-map-marker-alt"></i> <span data-id="Denpasar, Bali" data-en="Denpasar, Bali">Denpasar, Bali</span></div>
                        <div class="meta-pill"><i class="fas fa-shield-alt"></i> <span data-id="{{ $group['identity_id'] }}" data-en="{{ $group['identity_en'] }}">{{ $group['identity_id'] }}</span></div>
                    </div>

                    <div class="mobile-only" style="margin: 32px 0;">
                        <div class="tentang-image-wrap">
                            <img src="{{ asset('images/foto-andre.png') }}" alt="Gaharu Sempana Group - Tim Profesional">
                            <div class="tentang-badge-float tentang-badge-float--name">
                                <div class="info">
                                    <div class="num" style="font-size:13px; font-weight:700; line-height:1.3;">Ir. Putu Andre Wicaksana Putra, S.T., M.ars., IPP., CCMs.</div>
                                    <div class="label" data-id="Direktur PT. Gaharu Sempana" data-en="Director, PT. Gaharu Sempana">Direktur PT. Gaharu Sempana</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Subsidiary Companies --}}
                    <div class="subsidiary-cards">
                        @foreach($group['subsidiaries'] as $sub)
                            <div class="subsidiary-card">
                                <div class="subsidiary-logo-wrap">
                                    @if($sub['logo'] && file_exists(public_path('images/' . $sub['logo'])))
                                        <img src="{{ asset('images/' . $sub['logo']) }}" alt="Logo {{ $sub['name'] }}" class="subsidiary-logo-img">
                                    @else
                                        <div class="subsidiary-logo-fallback"><i class="fas fa-building"></i></div>
                                    @endif
                                </div>
                                <div class="subsidiary-info">
                                    <div class="subsidiary-name">{{ $sub['name'] }}</div>
                                    <div class="subsidiary-meta">
                                        <span class="meta-pill meta-pill-sm"><i class="fas fa-calendar"></i>
                                            <span data-id="{{ $sub['established_label_id'] }} {{ $sub['established'] }}" data-en="{{ $sub['established_label_en'] }} {{ $sub['established'] }}">{{ $sub['established_label_id'] }} {{ $sub['established'] }}</span>
                                        </span>
                                    </div>
                                    <div class="subsidiary-desc" data-id="{{ $sub['desc_id'] }}" data-en="{{ $sub['desc_en'] }}">{{ $sub['desc_id'] }}</div>
                                    <div class="subsidiary-director">
                                        <i class="fas fa-user-tie" style="color:var(--gold);margin-right:5px;"></i>
                                        <span class="dir-title" data-id="{{ $sub['director_title_id'] }}" data-en="{{ $sub['director_title_en'] }}">{{ $sub['director_title_id'] }}</span>:
                                        {{ $sub['director_id'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="values-grid">
                        @foreach($group['values'] as $v)
                            <div class="value-card">
                                <div class="icon">
                                    @if($v['icon'] === 'innovation') <i class="fas fa-lightbulb"></i>
                                    @elseif($v['icon'] === 'collaborate') <i class="fas fa-handshake"></i>
                                    @elseif($v['icon'] === 'adapt') <i class="fas fa-sync-alt"></i>
                                    @else <i class="fas fa-star"></i>
                                    @endif
                                </div>
                                <h4 data-id="{{ $v['title_id'] }}" data-en="{{ $v['title_en'] }}">{{ $v['title_id'] }}</h4>
                                <p data-id="{{ $v['desc_id'] }}" data-en="{{ $v['desc_en'] }}">{{ $v['desc_id'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="stats-row">
                        @foreach($group['stats'] as $s)
                            <div class="stat-item">
                                <div class="stat-value">{{ $s['value'] }}</div>
                                <div class="stat-label" data-id="{{ $s['label_id'] }}" data-en="{{ $s['label_en'] }}">{{ $s['label_id'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>