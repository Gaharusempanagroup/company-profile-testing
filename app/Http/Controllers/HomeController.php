<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $group = $this->getGroupData();
        $portfolio = $this->getPortfolioData();
        return view('home.index', compact('group', 'portfolio'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        return back()->with('success', 'Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda. | Your message has been sent successfully. We will contact you soon.');
    }

    private function getGroupData(): array
    {
        return [
            'name_id' => 'Gaharu Sempana Group',
            'name_en' => 'Gaharu Sempana Group',
            'tagline_id' => 'Inovatif. Kolaboratif. Adaptif. Profesional.',
            'tagline_en' => 'Innovative. Collaborative. Adaptive. Professional.',
            'description_id' => 'Gaharu Sempana Group adalah grup perusahaan swasta nasional yang telah aktif berkontribusi dalam pembangunan infrastruktur di Bali dan Indonesia. Menaungi dua entitas konsultan teknik berpengalaman yang bersinergi dalam melayani proyek irigasi, transportasi, gedung, jembatan, pariwisata, sanitasi, dan pengembangan infrastruktur perkotaan.',
            'description_en' => 'Gaharu Sempana Group is a national private company group that has actively contributed to infrastructure development in Bali and Indonesia. It houses two experienced engineering consultant entities working synergistically in irrigation, transportation, buildings, bridges, tourism, sanitation, and urban infrastructure development projects.',
            'location_id' => 'Denpasar, Bali',
            'location_en' => 'Denpasar, Bali',
            'identity_id' => 'Adaptif dan Profesional',
            'identity_en' => 'Adaptive and Professional',
            'subsidiaries' => [
                [
                    'id' => 'gsg',
                    'name' => 'PT. Gaharu Sempana',
                    'established' => '1994',
                    'established_label_id' => 'Berdiri',
                    'established_label_en' => 'Est.',
                    'logo' => 'LOGO GAHARU SEMPANA.png',
                    'director_id' => 'Ir. Putu Andre Wicaksana Putra, S.T., M.ars., IPP., CCMs.',
                    'director_en' => 'Ir. Putu Andre Wicaksana Putra, S.T., M.ars., IPP., CCMs.',
                    'director_title_id' => 'Direktur',
                    'director_title_en' => 'Director',
                    'desc_id' => 'Konsultan teknik terkemuka di Bali, aktif sejak 1994 dalam perencanaan dan pengawasan konstruksi.',
                    'desc_en' => 'A leading engineering consultant in Bali, active since 1994 in construction planning and supervision.',
                ],
                [
                    'id' => 'kak',
                    'name' => 'PT. Kencana Adhi Karma',
                    'established' => '1988',
                    'established_label_id' => 'Berdiri',
                    'established_label_en' => 'Est.',
                    'logo' => 'logo-kencana-adhi-karma.png',
                    'director_id' => 'Ir. RR. Diah Woro Sukraeni, IPU.',
                    'director_en' => 'Ir. RR. Diah Woro Sukraeni, IPU.',
                    'director_title_id' => 'Direktris',
                    'director_title_en' => 'Director',
                    'desc_id' => 'Konsultan teknik senior dengan rekam jejak lebih dari 35 tahun di Bali & Indonesia.',
                    'desc_en' => 'A senior engineering consultant with a track record of more than 35 years in Bali & Indonesia.',
                ],
                [
                    'id' => 'tataring',
                    'name' => 'CV. Tataring Bali',
                    'established' => '2000',
                    'established_label_id' => 'Berdiri',
                    'established_label_en' => 'Est.',
                    'logo' => 'logo-tataring-bali.png',
                    'director_id' => 'I Ketut Jaya, S.T.',
                    'director_en' => 'I Ketut Jaya, S.T.',
                    'director_title_id' => 'Direktur',
                    'director_title_en' => 'Director',
                    'desc_id' => 'Perusahaan konsultan yang bergerak di bidang perencanaan dan pengawasan konstruksi di Bali.',
                    'desc_en' => 'A consulting company engaged in construction planning and supervision in Bali.',
                ],
                [
                    'id' => 'cipta',
                    'name' => 'CV. Cipta Asri Disain',
                    'established' => '2000',
                    'established_label_id' => 'Berdiri',
                    'established_label_en' => 'Est.',
                    'logo' => 'logo-cipta-asri-disain.png',
                    'director_id' => 'I Gde Yudana Usada, S.T.',
                    'director_en' => 'I Gde Yudana Usada, S.T.',
                    'director_title_id' => 'Direktur',
                    'director_title_en' => 'Director',
                    'desc_id' => 'Perusahaan konsultan desain yang berfokus pada inovasi arsitektur dan perencanaan kreatif.',
                    'desc_en' => 'A design consulting company focused on architectural innovation and creative planning.',
                ],
            ],
            'values' => [
                ['icon' => 'innovation', 'title_id' => 'Inovatif', 'title_en' => 'Innovative', 'desc_id' => 'Terus berinovasi dalam solusi teknik dan desain untuk menghadirkan hasil terbaik.', 'desc_en' => 'Continuously innovating in engineering solutions and design to deliver the best results.'],
                ['icon' => 'collaborate', 'title_id' => 'Kolaboratif', 'title_en' => 'Collaborative', 'desc_id' => 'Bekerja sama secara sinergis dengan klien, pemerintah, dan pemangku kepentingan.', 'desc_en' => 'Working synergistically with clients, government, and stakeholders.'],
                ['icon' => 'adapt', 'title_id' => 'Adaptif', 'title_en' => 'Adaptive', 'desc_id' => 'Terbuka terhadap perubahan dan perkembangan teknologi konstruksi terkini.', 'desc_en' => 'Open to changes and the latest developments in construction technology.'],
                ['icon' => 'professional', 'title_id' => 'Profesional', 'title_en' => 'Professional', 'desc_id' => 'Memberikan layanan dengan standar profesionalisme tertinggi dengan tim berpengalaman.', 'desc_en' => 'Delivering services with the highest standards of professionalism with an experienced team.'],
            ],
            'stats' => [
                ['label_id' => 'Tahun Berpengalaman', 'label_en' => 'Years of Experience', 'value' => '35+'],
                ['label_id' => 'Proyek Selesai', 'label_en' => 'Projects Completed', 'value' => '200+'],
                ['label_id' => 'Klien Puas', 'label_en' => 'Satisfied Clients', 'value' => '100+'],
                ['label_id' => 'Ahli Profesional', 'label_en' => 'Professional Experts', 'value' => '70+'],
            ],
        ];
    }

    private function getPortfolioData(): array
    {
        return [
            ['title' => 'Pasar Sukawati', 'category_id' => 'Pasar', 'category_en' => 'Market', 'desc_id' => 'Perencanaan Pengembangan Pasar Tradisional & Modern, Blok A, B, C, Gianyar 2019', 'desc_en' => 'Traditional & Modern Market Development Planning, Block A, B, C, Gianyar 2019', 'image' => 'Pasar sukawati.jpg'],
            ['title' => 'RSUD Sanjiwani Gianyar', 'category_id' => 'Rumah Sakit', 'category_en' => 'Hospital', 'desc_id' => 'Perencanaan Gedung Rawat Inap RSUD Sanjiwani Gianyar', 'desc_en' => 'Planning of the Inpatient Building at Sanjiwani Regional Hospital, Gianyar', 'image' => 'RSUD Sanjiwani.jpg'],
            ['title' => 'Bank BPD Bali', 'category_id' => 'Gedung', 'category_en' => 'Building', 'desc_id' => 'Perencanaan Gedung Bank BPD Bali, Denpasar', 'desc_en' => 'Building Planning of Bank BPD Bali, Denpasar', 'image' => 'Bank BPD.jpg'],
            ['title' => 'Pasar Banyuasri', 'category_id' => 'Pasar', 'category_en' => 'Market', 'desc_id' => 'Perencanaan Revitalisasi Pasar Tradisional Banyuasri, Buleleng', 'desc_en' => 'Revitalization Planning for Banyuasri Traditional Market, Buleleng', 'image' => 'Pasar Banyuasri.bmp'],
            ['title' => 'RSUD Payangan', 'category_id' => 'Rumah Sakit', 'category_en' => 'Hospital', 'desc_id' => 'Perencanaan Masterplan Gedung Rumah Sakit, Payangan', 'desc_en' => 'Hospital Building Planning, Payangan', 'image' => 'RSU Payangan.jpg'],
            ['title' => 'RSUD Tabanan', 'category_id' => 'Rumah Sakit', 'category_en' => 'Hospital', 'desc_id' => 'Perencanaan Gedung Instalasi Jenazah Rumah Sakit Umum Daerah Tabanan', 'desc_en' => 'Planning the Mortuary Installation Building of Tabanan Regional General Hospital', 'image' => 'RSU Tabanan.jpg'],
            ['title' => 'Mall Pelayanan Publik Gianyar', 'category_id' => 'Gedung', 'category_en' => 'Building', 'desc_id' => 'Perencanaan Gedung Mall Pelayanan Publik, Gianyar', 'desc_en' => 'Public Service Mall Building Planning, Gianyar', 'image' => 'MPP Gianyar.jpg'],
            ['title' => 'Pasar Badung', 'category_id' => 'Pasar', 'category_en' => 'Market', 'desc_id' => 'Perencanaan Revitalisasi Pasar Badung, Denpasar', 'desc_en' => 'Revitalization Planning for Badung Market, Denpasar', 'image' => 'Pasar Badung.jpg'],
            ['title' => 'Lecture Building UNUD', 'category_id' => 'Pendidikan', 'category_en' => 'Education', 'desc_id' => 'Perencanaan Gedung Kuliah Universitas Udayana', 'desc_en' => 'Lecture Building Planning of Udayana University', 'image' => 'Lecture Building UNUD.jpg'],
            ['title' => 'Pasar Umum Gianyar', 'category_id' => 'Pasar', 'category_en' => 'Market', 'desc_id' => 'Perencanaan Pasar Modern 1.600+ Unit', 'desc_en' => 'Modern Market Planning with 1,600+ Units', 'image' => 'Pasar Gianyar.jpg'],
        ];
    }
}
