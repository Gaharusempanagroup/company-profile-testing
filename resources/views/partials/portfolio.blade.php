<section id="portfolio" class="section-padding">
    <div class="container">
        <div class="portfolio-header" data-aos="fade-up">
            <div class="section-label" style="color:var(--gold); justify-content:center;">
                <span style="background:var(--gold);"></span>
                <span data-id="Sekilas Karya" data-en="Portfolio Highlights">Sekilas Karya</span>
            </div>
            <h2 class="section-title" style="color:var(--white);">
                <span data-id="Karya " data-en="Featured ">Karya </span>
                <span style="background:linear-gradient(135deg,var(--gold),var(--gold-light));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;" data-id="Unggulan" data-en="Works">Unggulan</span>
            </h2>
            <p class="section-subtitle" style="margin:0 auto;color:rgba(255,255,255,0.6);" data-id="Berbagai proyek berskala besar yang telah kami selesaikan dengan dedikasi dan standar kualitas tertinggi." data-en="Various large-scale projects that we have completed with dedication and the highest quality standards.">
                Berbagai proyek berskala besar yang telah kami selesaikan dengan dedikasi dan standar kualitas
                tertinggi.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="portfolio-filters" id="portfolioFilters">
            <button class="filter-btn active" data-filter="all" data-id="Semua" data-en="All">Semua</button>
            <button class="filter-btn" data-filter="Pasar" data-id="Pasar" data-en="Market">Pasar</button>
            <button class="filter-btn" data-filter="Rumah Sakit" data-id="Rumah Sakit" data-en="Hospital">Rumah Sakit</button>
            <button class="filter-btn" data-filter="Gedung" data-id="Gedung" data-en="Building">Gedung</button>
            <button class="filter-btn" data-filter="Pendidikan" data-id="Pendidikan" data-en="Education">Pendidikan</button>
        </div>

        @php
            $pfColors = ['pf-1', 'pf-2', 'pf-3', 'pf-4', 'pf-5', 'pf-6'];
            $pfIcons = [
                'Pasar' => 'fa-store',
                'Rumah Sakit' => 'fa-hospital',
                'Gedung' => 'fa-building',
                'Pendidikan' => 'fa-graduation-cap',
            ];
        @endphp

        <div class="portfolio-swiper swiper" id="pfSwiper">
            <div class="swiper-wrapper" id="pfGrid">
                @foreach($portfolio as $i => $item)
                    <div class="swiper-slide">
                        <div class="portfolio-item" data-category="{{ $item['category_id'] }}" data-aos="fade-up"
                            data-aos-delay="{{ ($i % 6) * 80 }}">
                            @if(isset($item['image']))
                                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}"
                                    class="portfolio-bg">
                            @else
                                <div class="pf-placeholder {{ $pfColors[$i % 6] }}">
                                    <i class="fas {{ $pfIcons[$item['category_id']] ?? 'fa-building' }}"
                                        style="color:rgba(255,255,255,0.15);"></i>
                                </div>
                            @endif
                            <div class="portfolio-overlay">
                                <div class="portfolio-category" data-id="{{ $item['category_id'] }}" data-en="{{ $item['category_en'] }}">{{ $item['category_id'] }}</div>
                                <div class="portfolio-title">{{ $item['title'] }}</div>
                                <div class="portfolio-desc" data-id="{{ $item['desc_id'] }}" data-en="{{ $item['desc_en'] }}">{{ $item['desc_id'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>