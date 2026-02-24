<section id="portfolio" class="section-padding">
    <div class="container">
        <div class="portfolio-header" data-aos="fade-up">
            <div class="section-label" style="color:var(--gold); justify-content:center;">
                <span style="background:var(--gold);"></span>
                Sekilas Karya
            </div>
            <h2 class="section-title" style="color:var(--white);">Portofolio <span style="background:linear-gradient(135deg,var(--gold),var(--gold-light));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Unggulan</span></h2>
            <p class="section-subtitle" style="margin:0 auto;color:rgba(255,255,255,0.6);">
                Berbagai proyek berskala besar yang telah kami selesaikan dengan dedikasi dan standar kualitas tertinggi.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="portfolio-filters" id="portfolioFilters">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="Pasar">Pasar</button>
            <button class="filter-btn" data-filter="Rumah Sakit">Rumah Sakit</button>
            <button class="filter-btn" data-filter="Gedung">Gedung</button>
            <button class="filter-btn" data-filter="Pendidikan">Pendidikan</button>
        </div>

        @php
            $pfColors = ['pf-1','pf-2','pf-3','pf-4','pf-5','pf-6'];
            $pfIcons  = [
                'Pasar'      => 'fa-store',
                'Rumah Sakit'=> 'fa-hospital',
                'Gedung'     => 'fa-building',
                'Pendidikan' => 'fa-graduation-cap',
            ];
        @endphp

        {{-- GSG Portfolio --}}
        <div class="company-section active" id="portfolio-gsg">
            <div class="portfolio-grid" id="pfGrid-gsg">
                @foreach($companies['gsg']['portfolio'] as $i => $item)
                <div class="portfolio-item" data-category="{{ $item['category'] }}" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                    <div class="pf-placeholder {{ $pfColors[$i % 6] }}">
                        <i class="fas {{ $pfIcons[$item['category']] ?? 'fa-building' }}" style="color:rgba(255,255,255,0.15);"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-category">{{ $item['category'] }}</div>
                        <div class="portfolio-title">{{ $item['title'] }}</div>
                        <div class="portfolio-desc">{{ $item['desc'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- KAK Portfolio --}}
        <div class="company-section" id="portfolio-kak">
            <div class="portfolio-grid" id="pfGrid-kak">
                @foreach($companies['kak']['portfolio'] as $i => $item)
                <div class="portfolio-item" data-category="{{ $item['category'] }}" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                    <div class="pf-placeholder {{ $pfColors[$i % 6] }}">
                        <i class="fas {{ $pfIcons[$item['category']] ?? 'fa-building' }}" style="color:rgba(255,255,255,0.15);"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-category">{{ $item['category'] }}</div>
                        <div class="portfolio-title">{{ $item['title'] }}</div>
                        <div class="portfolio-desc">{{ $item['desc'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
