<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $companies = $this->getCompaniesData();
        return view('home.index', compact('companies'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        return back()->with('success', 'Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.');
    }

    private function getCompaniesData(): array
    {
        return [
            'gsg' => [
                'id'          => 'gsg',
                'name'        => 'PT. Gaharu Sempana',
                'short_name'  => 'GSG',
                'established' => '1994',
                'notary'      => 'Akta Notaris No. 17, 26 Juli 1994',
                'tagline'     => 'Inovatif. Kolaboratif. Adaptif. Profesional.',
                'description' => 'PT. Gaharu Sempana adalah perusahaan swasta nasional yang telah aktif berkontribusi dalam pembangunan infrastruktur sejak 1994. Bergerak di bidang jasa konsultan teknik (Engineering Consultant), kami melayani proyek irigasi, transportasi, gedung, jembatan, pariwisata, sanitasi, dan pengembangan infrastruktur perkotaan.',
                'identity'    => 'Adaptif dan Profesional',
                'director'    => 'Wayan Gede Yasa, S.T.',
                'director_title' => 'Direktur',
                'values'      => [
                    ['icon' => 'innovation', 'title' => 'Inovatif', 'desc' => 'Terus berinovasi dalam solusi teknik dan desain untuk menghadirkan hasil terbaik.'],
                    ['icon' => 'collaborate', 'title' => 'Kolaboratif', 'desc' => 'Bekerja sama secara sinergis dengan klien, pemerintah, dan pemangku kepentingan.'],
                    ['icon' => 'adapt', 'title' => 'Adaptif', 'desc' => 'Terbuka terhadap perubahan dan perkembangan teknologi konstruksi terkini.'],
                    ['icon' => 'professional', 'title' => 'Profesional', 'desc' => 'Memberikan layanan dengan standar profesionalisme tertinggi dengan tim berpengalaman.'],
                ],
                'stats' => [
                    ['label' => 'Tahun Berpengalaman', 'value' => '30+'],
                    ['label' => 'Proyek Selesai',       'value' => '150+'],
                    ['label' => 'Klien Puas',           'value' => '80+'],
                    ['label' => 'Ahli Profesional',     'value' => '40+'],
                ],
                'portfolio' => [
                    ['title' => 'RSUD Sanjiwani Gianyar',    'category' => 'Rumah Sakit',  'desc' => 'DED Perencanaan Gedung Rawat Inap'],
                    ['title' => 'Pasar Negara Bahagia',      'category' => 'Pasar',         'desc' => 'DED Revitalisasi Pasar Tradisional, Jembrana'],
                    ['title' => 'RSU Tabanan',                'category' => 'Rumah Sakit',  'desc' => 'Masterplan Rumah Sakit Umum Tabanan'],
                    ['title' => 'Pasar Badung',               'category' => 'Pasar',         'desc' => 'DED Smart Heritage Market Concept, Denpasar'],
                    ['title' => 'Pasar Umum Gianyar',         'category' => 'Pasar',         'desc' => 'Perencanaan Pasar Modern 1.600+ Unit'],
                    ['title' => 'Labtek UNUD Jimbaran',       'category' => 'Pendidikan',    'desc' => 'Laboratorium Teknik Universitas Udayana'],
                ],
            ],
            'kak' => [
                'id'          => 'kak',
                'name'        => 'PT. Kencana Adhi Karma',
                'short_name'  => 'KAK',
                'established' => '1988',
                'notary'      => 'Akta Notaris K. Rames Iswara, SH., No. 6, 6 Desember 1988',
                'tagline'     => 'Konsultan Perencanaan dan Pengawas Berpengalaman Sejak 1988.',
                'description' => 'PT. Kencana Adhi Karma didirikan pada tahun 1988 sebagai konsultan teknik senior di Bali. Kami memiliki rekam jejak panjang dalam bidang irigasi/sumber daya air, transportasi, gedung, jembatan, pariwisata, sanitasi lingkungan, dan pengembangan infrastruktur perkotaan.',
                'identity'    => 'Adaptif dan Profesional',
                'director'    => 'Ir. RR. Diah Woro Sukraeni, IPU.',
                'director_title' => 'Direktris',
                'values'      => [
                    ['icon' => 'innovation', 'title' => 'Berpengalaman', 'desc' => 'Lebih dari 35 tahun pengalaman dalam konsultansi teknik di Bali dan Indonesia.'],
                    ['icon' => 'collaborate', 'title' => 'Kolaboratif', 'desc' => 'Bekerja sama sinergis dengan pemerintah daerah dan pusat dalam berbagai proyek.'],
                    ['icon' => 'adapt', 'title' => 'Adaptif', 'desc' => 'Terbuka terhadap perubahan dan siap melayani dengan hasil terbaik.'],
                    ['icon' => 'professional', 'title' => 'Profesional', 'desc' => 'Tim ahli bersertifikat yang siap memberikan solusi teknik terbaik.'],
                ],
                'stats' => [
                    ['label' => 'Tahun Berpengalaman', 'value' => '35+'],
                    ['label' => 'Proyek Selesai',       'value' => '200+'],
                    ['label' => 'Klien Puas',           'value' => '100+'],
                    ['label' => 'Ahli Profesional',     'value' => '35+'],
                ],
                'portfolio' => [
                    ['title' => 'Pasar Sukawati',           'category' => 'Pasar',         'desc' => 'Pengembangan Pasar Tradisional & Modern, Blok A, B, C, Gianyar 2019'],
                    ['title' => 'Gedung Arsip BPD Bali',    'category' => 'Gedung',        'desc' => 'Desain Gedung Arsip Bank BPD Bali, Denpasar'],
                    ['title' => 'RSU Surya Husada',         'category' => 'Rumah Sakit',  'desc' => 'Perencanaan Gedung Rumah Sakit, Denpasar Utara'],
                    ['title' => 'Kerta Shaba Denpasar',     'category' => 'Gedung',        'desc' => 'Gedung Kediaman Resmi Gubernur Bali, 2021'],
                    ['title' => 'Labtek UNUD Jimbaran',     'category' => 'Pendidikan',    'desc' => 'Lab Teknik Universitas Udayana (APBN)'],
                    ['title' => 'RSU Tabanan',              'category' => 'Rumah Sakit',  'desc' => 'Masterplan Rumah Sakit Umum Daerah Tabanan'],
                ],
            ],
        ];
    }
}
