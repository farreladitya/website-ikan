<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EfekSampingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('efek_samping')->insert([
            [
                'efek_samping_id' => 'd01',
                'efek_samping' => 'Gangguan kesehatan mental',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Timbal,Merkuri,Kadmium',
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd02',
                'efek_samping' => 'Risiko penyakit autoimun',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd04',
                'efek_samping' => 'Diare',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Anisakis Simplex Dan Cestodes',
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd05',
                'efek_samping' => 'Mual',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Vibrio, Salmonella, Shigella, Clostridium Botulinum, Staphylococcus Aureus, Clostridium Perfringens, Dan Bacillus Cereus',
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd06',
                'efek_samping' => 'Muntah',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Vibrio, Salmonella, Shigella, Clostridium Botulinum, Staphylococcus Aureus, Clostridium Perfringens, Dan Bacillus Cereus',
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd08',
                'efek_samping' => 'Diabetes tingkat dua',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://health.kompas.com/read/2016/09/15/103838223/efek.samping.kebanyakan.makan.ikan.laut.dalam'
            ],
            [
                'efek_samping_id' => 'd10',
                'efek_samping' => 'Otot terasa lemas',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi'
            ],
            [
                'efek_samping_id' => 'd11',
                'efek_samping' => 'Koordinasi anggota tubuh menurun',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi'
            ],
            [
                'efek_samping_id' => 'd12',
                'efek_samping' => 'Sistem indera perasa terganggu',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi'
            ],
            [
                'efek_samping_id' => 'd13',
                'efek_samping' => 'Gangguan pada penglihatan perifer',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi'
            ],
            [
                'efek_samping_id' => 'd14',
                'efek_samping' => 'Kesulitan berjalan, mendengar, dan berbicara',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi,https://www.aia-financial.co.id/id/PMM/Artikel-38-Mengonsumsi-ikan-laut-dan-dampaknya-terhadap-kesehatan.html'
            ],
            [
                'efek_samping_id' => 'd17',
                'efek_samping' => 'Asam urat',
                'nama_ikan' => 'Udang Rebon|Udang Jerbung|Udang Peci|Udang Pancet|Udang Vaname|Udang Galah|Pacific Oyster|Eastern Oyster',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://health.grid.id/read/352548003/jangan-dulu-makan-ikan-jika-dalam-kondisi-ini-risikonya-buruk-bagi-kesehatan?page=all'
            ],
            [
                'efek_samping_id' => 'd18',
                'efek_samping' => 'Keterlambatan perkembangan pada anak-anak',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://www.klikdokter.com/info-sehat/read/3616043/amankah-anak-makan-ikan-setiap-hari,https://manado.tribunnews.com/2019/02/06/ini-efek-baik-dan-buruknya-makan-ikan-setiap-hari-simak-penjelasannya#google_vignette'
            ],
            [
                'efek_samping_id' => 'd19',
                'efek_samping' => 'Memberatkan kerja ginjal dan jantung',
                'nama_ikan' => 'Ikan Asin',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd20',
                'efek_samping' => 'Risiko kanker',
                'nama_ikan' => 'Ikan Asin',
                'ktrt_racun' => 'Nitrosamin',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd21',
                'efek_samping' => 'Membahayakan sistem saraf janin dan anak-anak',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd22',
                'efek_samping' => 'Listeria',
                'nama_ikan' => 'Atlantic Salmon|Chinook Salmon|Chum/Dog Salmon|Sockeye Salmon|Coho Salmon|Pink Salmon',
                'ktrt_racun' => 'Bakteri Listeriosis',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd24',
                'efek_samping' => 'Kekurangan Vitamin B1',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd25',
                'efek_samping' => 'Keracunan Makanan',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Methyl Mercury|Salmonella|Vibrio Vulnificus',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd26',
                'efek_samping' => 'Hepatitis',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd27',
                'efek_samping' => 'Keracunan scombroid',
                'nama_ikan' => 'Teri/Anchovy|Atlantic Salmon|Chinook Salmon|Chum/Dog Salmon|Sockeye Salmon|Coho Salmon|Pink Salmon|Tongkol/Cob',
                'ktrt_racun' => 'Toksin Scombroid',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd28',
                'efek_samping' => 'Menyebabkan kanker',
                'nama_ikan' => 'Atlantic Salmon|Chinook Salmon|Chum/Dog Salmon|Sockeye Salmon|Coho Salmon|Pink Salmon',
                'ktrt_racun' => 'Dioxins|Polychlorinated Biphenyls (PCBs)|Obat-Obatan Kimiawi',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd38',
                'efek_samping' => 'Gangguan reproduksi (endometriosis wanita)',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Kandungan Mikroplastik',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd39',
                'efek_samping' => 'Impotensi',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Kandungan Mikroplastik',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd40',
                'efek_samping' => 'Menaikkan kadar kolesterol',
                'nama_ikan' => 'Udang Rebon|Udang Jerbung|Udang Peci|Udang Pancet|Udang Vaname|Udang Galah',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd41',
                'efek_samping' => 'Keracunan ciguatera',
                'nama_ikan' => 'Ikan Kerapu Bebek|Ikan Kerapu Macan|Ikan Kerapu Lumpur|Ikan Kerapu Sunu|Ikan Kerapu Cantang',
                'ktrt_racun' => 'Kandungan Ciguatoxin',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd42',
                'efek_samping' => 'Kulit gatal',
                'nama_ikan' => 'Udang Rebon|Udang Jerbung|Udang Peci|Udang Pancet|Udang Vaname|Udang Galah|Dungeness Crab|Alaskan King Crab|Blue Crab|Cumi Bangka|Cumi Sero|Cumi Asin Kering|Sotong|Lobster',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd43',
                'efek_samping' => 'Syok Anafilaktik',
                'nama_ikan' => 'Udang Rebon|Udang Jerbung|Udang Peci|Udang Pancet|Udang Vaname|Udang Galah|Dungeness Crab|Alaskan King Crab|Blue Crab|Cumi Bangka|Cumi Sero|Cumi Asin Kering|Sotong|Lobster',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd44',
                'efek_samping' => 'Darah tinggi',
                'nama_ikan' => 'Ikan Asin',
                'ktrt_racun' => null,
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd45',
                'efek_samping' => 'Berpotensi membuat janin tidak berkembang sempurna',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
            [
                'efek_samping_id' => 'd46',
                'efek_samping' => 'Meningkatkan potensi gangguan neuro-degeneratif',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'url_efek_samping' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-bahaya-makan-ikan-asin/'
            ],
        ]);
    }
}
