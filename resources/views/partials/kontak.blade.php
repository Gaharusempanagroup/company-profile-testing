<section id="kontak" class="section-padding">
    <div class="container">
        <div class="kontak-grid">
            <!-- Info -->
            <div data-aos="fade-right">
                <div class="section-label" style="color:var(--gold);">
                    <span style="background:var(--gold);"></span>
                    Hubungi Kami
                </div>
                <h2 class="section-title" style="color:var(--white);">Siap Membantu <span style="background:linear-gradient(135deg,var(--gold),var(--gold-light));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Proyek Anda</span></h2>
                <p class="section-subtitle" style="color:rgba(255,255,255,0.6);">
                    Konsultasikan kebutuhan perencanaan dan pengawasan konstruksi Anda bersama tim profesional kami.
                </p>

                <div class="kontak-details">
                    <div class="kontak-item">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info">
                            <div class="label">Alamat Kantor</div>
                            <div class="value">Jl. Batusari No. 15, Kel. Dangin Puri Kelod,<br>Kec. Denpasar Timur, Kota Denpasar, Bali</div>
                        </div>
                    </div>
                    <div class="kontak-item">
                        <div class="icon"><i class="fas fa-phone"></i></div>
                        <div class="info">
                            <div class="label">Nomor Telepon</div>
                            <div class="value">(0361) 241613 &nbsp;|&nbsp; (0361) 241676</div>
                        </div>
                    </div>
                    <div class="kontak-item">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="info">
                            <div class="label">Email</div>
                            <div class="value">gaharusempanagroup@gmail.com<br>
                            <span style="font-size:13px;opacity:0.7;"></span></div>
                        </div>
                    </div>
                    <div class="kontak-item">
                        <div class="icon"><i class="fas fa-clock"></i></div>
                        <div class="info">
                            <div class="label">Jam Kerja</div>
                            <div class="value">Senin – Jumat: 08.00 – 17.00 WITA</div>
                        </div>
                    </div>
                </div>

                <div class="socials">
                    <a href="https://instagram.com/gaharusempanagroup" target="_blank" class="social-btn" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="mailto:gaharusempanagroup@gmail.com" class="social-btn" title="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="tel:036124161" class="social-btn" title="Telepon">
                        <i class="fas fa-phone"></i>
                    </a>
                    <a href="https://wa.me/62361241613" target="_blank" class="social-btn" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://maps.google.com/?q=Jl.+Batusari+No.+15,+Dangin+Puri+Kelod,+Denpasar+Timur,+Kota+Denpasar,+Bali" target="_blank" class="social-btn social-btn-maps" title="Lihat di Google Maps">
                        <i class="fas fa-map-marker-alt"></i>
                    </a>
                </div>
            </div>

            <!-- Form -->
            <div data-aos="fade-left">
                <div class="kontak-form-wrap">
                    <h3 class="form-title">Kirim Pesan</h3>

                    @if(session('success'))
                    <div class="alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nama Lengkap <span style="color:var(--gold);">*</span></label>
                                <input type="text" id="name" name="name" placeholder="Nama Anda" value="{{ old('name') }}" required>
                                @error('name') <span style="color:#f87171;font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span style="color:var(--gold);">*</span></label>
                                <input type="email" id="email" name="email" placeholder="email@example.com" value="{{ old('email') }}" required>
                                @error('email') <span style="color:#f87171;font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek <span style="color:var(--gold);">*</span></label>
                            <input type="text" id="subject" name="subject" placeholder="Subjek pesan Anda" value="{{ old('subject') }}" required>
                            @error('subject') <span style="color:#f87171;font-size:12px;">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan <span style="color:var(--gold);">*</span></label>
                            <textarea id="message" name="message" rows="5" placeholder="Tuliskan pesan, pertanyaan, atau kebutuhan proyek Anda..." required>{{ old('message') }}</textarea>
                            @error('message') <span style="color:#f87171;font-size:12px;">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary form-submit">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
