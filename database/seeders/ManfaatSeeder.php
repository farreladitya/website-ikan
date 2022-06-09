<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManfaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manfaat')->insert([
            [
                'manfaat_id' => 'm01',
                'manfaat' => 'Membantu pertumbuhan, terutama otak dan tulang anak',
                'kandungan' => 'Protein,Asam Lemak,Omega-3,Vitamin D,Kalsium,Fosfor,Vitamin B2,Zat Besi,Zinc,Yodium,Magnesium,Kalium',
                'url' => 'https://hellosehat.com/nutrisi/fakta-kandungan/berbagai-manfaat-makan-ikan/'
            ],
            [
                'manfaat_id' => 'm02',
                'manfaat' => 'Mencegah penyakit jantung ',
                'kandungan' => 'Protein,Vitamin,Mineral,Omega-3',
                'url' => '"https://www.merdeka.com/sehat/4-manfaat-luar-biasa-yang-bisa-diperoleh-dari-konsumsi-rutin-ikan-laut.html
                https://hellosehat.com/nutrisi/fakta-kandungan/berbagai-manfaat-makan-ikan/"'
            ],
            [
                'manfaat_id' => 'm03',
                'manfaat' => 'Mengurangi risiko penyakit Alzheimer ',
                'kandungan' => 'Asam Lemak,Omega-3',
                'url' => '"https://www.klikdokter.com/info-sehat/read/2859803/ikan-untuk-mencegah-alzheimer
                https://hellosehat.com/nutrisi/fakta-kandungan/berbagai-manfaat-makan-ikan/"'
            ],
            [
                'manfaat_id' => 'm04',
                'manfaat' => 'Mengurangi risiko depresi ',
                'kandungan' => 'Omega-3',
                'url' => '"https://plus.kapanlagi.com/7-manfaat-ikan-bila-dikonsumsi-setiap-hari-apa-bahaya-5ec9a1.html
                https://hellosehat.com/nutrisi/fakta-kandungan/berbagai-manfaat-makan-ikan/"'
            ],
            [
                'manfaat_id' => 'm05',
                'manfaat' => 'Melindungi mata dari degenerasi makula karena penuaan. ',
                'kandungan' => 'Asam Lemak,Omega-3',
                'url' => '"https://hellosehat.com/nutrisi/fakta-kandungan/berbagai-manfaat-makan-ikan/
                https://aruna.id/2021/01/25/ikan-tuna-ikan-favorit-kaya-kandungan-manfaat-bagus-bagi-tubuh-2/"'
            ],
            [
                'manfaat_id' => 'm06',
                'manfaat' => 'Mencegah penyakit asma pada anak. ',
                'kandungan' => 'Asam Lemak,Omega-3',
                'url' => '"https://hellosehat.com/nutrisi/fakta-kandungan/berbagai-manfaat-makan-ikan/
                https://hellosehat.com/pernapasan/asma/makanan-untuk-penderita-asma/"'
            ],
            [
                'manfaat_id' => 'm07',
                'manfaat' => 'Menurunkan risiko diabetes tipe 1',
                'kandungan' => 'Omega-3',
                'url' => '"https://hellosehat.com/nutrisi/fakta-kandungan/berbagai-manfaat-makan-ikan/
                https://www.primarasa.co.id/kandungan/8-manfaat-ikan-bagi-kesehatan"'
            ],
            [
                'manfaat_id' => 'm08',
                'manfaat' => 'Mengurangi risiko penyakit Jantung',
                'kandungan' => 'Asam Lemak,Omega-3,Vitamin B1,Vitamin B2,Vitamin B3,Vitamin B5,Vitamin B6',
                'url' => 'https://hellosehat.com/nutrisi/fakta-kandungan/manfaat-ikan-tuna/'
            ],
            [
                'manfaat_id' => 'm09',
                'manfaat' => 'Menjaga kesehatan tulang',
                'kandungan' => 'Fosfor,Mineral,Kalsium',
                'url' => 'https://hellosehat.com/nutrisi/fakta-kandungan/manfaat-ikan-tuna/'
            ],
            [
                'manfaat_id' => 'm10',
                'manfaat' => 'Menurunkan tekanan darah',
                'kandungan' => 'Kalium,Polifenol,Kalsium,Magnesium',
                'url' => 'https://health.kompas.com/read/2021/07/10/180000068/13-cara-alami-turunkan-tekanan-darah-tinggi-tanpa-obat?page=all'
            ],
            [
                'manfaat_id' => 'm11',
                'manfaat' => 'Melancarkan peredaran darah',
                'kandungan' => 'Vitamin E,Antioksian,Oksida Nitrat,Antiinflamasi',
                'url' => 'https://health.kompas.com/read/2021/05/01/160400068/20-makanan-untuk-melancarkan-peredaran-darah?page=all'
            ],
            [
                'manfaat_id' => 'm12',
                'manfaat' => 'Menjaga kesehatan mata',
                'kandungan' => 'Vitamin B6,Vitamin C,Kalsium,Kalium,Fosfor,Serat',
                'url' => 'http://p2ptm.kemkes.go.id/artikel-sehaKetahanan tubuht/buah-dan-sayur-pelindung-mata-ini-daftarnya'
            ],
            [
                'manfaat_id' => 'm13',
                'manfaat' => 'Ketahanan tubuh',
                'kandungan' => 'Vitamin C,Vitamin A,Vitamin E,Antioksidan',
                'url' => 'https://www.alodokter.com/berikut-ini-makanan-dan-tips-meningkatkan-daya-tahan-tubuh-yang-benar'
            ],
            [
                'manfaat_id' => 'm14',
                'manfaat' => 'Menurunkan kolestrol',
                'kandungan' => 'Vitamin K,Vitamin C,Vitamin B5,Vitamin B6,Vitamin E',
                'url' => 'https://health.detik.com/berita-detikhealth/d-5880869/10-cara-menurunkan-kolesterol-secara-alami-tanpa-minum-obat'
            ],
            [
                'manfaat_id' => 'm15',
                'manfaat' => 'Mencegah terjadinya anemia',
                'kandungan' => 'Zat Besi,Vitamin B12,Vitamin A,Vitamin C,Vitamin E',
                'url' => 'https://www.halodoc.com/artikel/5-jenis-asupan-makanan-untuk-pengidap-anemia'
            ],
            [
                'manfaat_id' => 'm16',
                'manfaat' => 'Meningkatkan kualitas tidur',
                'kandungan' => 'Vitamin D',
                'url' => '"https://www.sehatq.com/artikel/ini-manfaat-makan-ikan-yang-menyehatkan-bagi-tubuh
                https://vivahealth.co.id/article/detail/13424/manfaat-ikan-laut-bagi-kesehatan"'
            ],
            [
                'manfaat_id' => 'm17',
                'manfaat' => 'Mengurangi risiko lahir prematur pada ibu hamil',
                'kandungan' => 'Omega-3,Asam Amino',
                'url' => '"https://www.sehatq.com/artikel/ini-manfaat-makan-ikan-yang-menyehatkan-bagi-tubuh
                https://lifestyle.kompas.com/read/2020/05/11/115735920/10-manfaat-makan-ikan-yang-menyehatkan-bagi-tubuh?page=all"'
            ],
            [
                'manfaat_id' => 'm18',
                'manfaat' => 'meningkatkan kemampuan otak untuk memproses pembelajaran dan daya ingat',
                'kandungan' => 'Kolin',
                'url' => 'https://www.sehatq.com/artikel/ini-manfaat-makan-ikan-yang-menyehatkan-bagi-tubuh'
            ],
            [
                'manfaat_id' => 'm19',
                'manfaat' => 'mempercepat penyembuhan luka',
                'kandungan' => 'Albumin',
                'url' => 'https://www.sehatq.com/artikel/ini-manfaat-makan-ikan-yang-menyehatkan-bagi-tubuh'
            ],
            [
                'manfaat_id' => 'm20',
                'manfaat' => ' mencegah hipertensi',
                'kandungan' => 'Kalium,Omega-3',
                'url' => '"https://www.sehatq.com/artikel/ini-manfaat-makan-ikan-yang-menyehatkan-bagi-tubuh
                https://www.cermati.com/artikel/suka-mengonsumsi-ikan-dori-manfaat-kesehatan-inilah-yang-pasti-didapatkan-tubuh"'
            ],
            [
                'manfaat_id' => 'm21',
                'manfaat' => 'menjaga massa otot tubuh',
                'kandungan' => 'Omega-3,Protein',
                'url' => 'https://www.sehatq.com/artikel/ini-manfaat-makan-ikan-yang-menyehatkan-bagi-tubuh'
            ],
            [
                'manfaat_id' => 'm22',
                'manfaat' => 'Mencegah penyakit tiroid',
                'kandungan' => 'Yodium,Selenium',
                'url' => 'https://www.alodokter.com/5-manfaat-ikan-laut-yang-sayang-dilewatkan'
            ],
            [
                'manfaat_id' => 'm23',
                'manfaat' => 'Program diet',
                'kandungan' => 'Vitamin,Mineral,Omega-3,Protein,Nutrisi',
                'url' => 'https://www.superindo.co.id/artikel/info-sehat/manfaat-ikan-bagi-kesehatan/3'
            ],
            [
                'manfaat_id' => 'm24',
                'manfaat' => 'Mengurangi risiko kanker',
                'kandungan' => 'Anthocyanin,Omega-3,Vitamin D,Likopen',
                'url' => 'https://www.alodokter.com/yuk-kurangi-risiko-kanker-dengan-konsumsi-makanan-dan-minuman-ini'
            ],
            [
                'manfaat_id' => 'm25',
                'manfaat' => 'Menurunkan Risiko Autoimun',
                'kandungan' => 'Asam Lemak,Omega-3',
                'url' => '"https://www.klikdokter.com/info-sehat/read/3220021/segudang-manfaat-makan-ikan-untuk-anak#:~:text=Manfaat%20ikan%20pada%20balita%20adalah,ikan%20yang%20tinggi%20kandungan%20DHA.
                https://www.kalbemed.com/article/show/768"'
            ],
            [
                'manfaat_id' => 'm26',
                'manfaat' => 'Menurunkan Risiko Alergi (asma dan dermatitis atopik)',
                'kandungan' => 'Asam Lemak',
                'url' => 'https://www.klikdokter.com/info-sehat/read/3220021/segudang-manfaat-makan-ikan-untuk-anak#:~:text=Manfaat%20ikan%20pada%20balita%20adalah,ikan%20yang%20tinggi%20kandungan%20DHA.'
            ],
            [
                'manfaat_id' => 'm27',
                'manfaat' => 'menjaga fungsi penglihatan anak',
                'kandungan' => 'Asam Lemak,Omega-3',
                'url' => 'https://www.klikdokter.com/info-sehat/read/3220021/segudang-manfaat-makan-ikan-untuk-anak#:~:text=Manfaat%20ikan%20pada%20balita%20adalah,ikan%20yang%20tinggi%20kandungan%20DHA.'
            ],
            [
                'manfaat_id' => 'm28',
                'manfaat' => 'Mencegah stunting',
                'kandungan' => 'Protein',
                'url' => 'https://www.klikdokter.com/info-sehat/read/3220021/segudang-manfaat-makan-ikan-untuk-anak#:~:text=Manfaat%20ikan%20pada%20balita%20adalah,ikan%20yang%20tinggi%20kandungan%20DHA.'
            ],
            [
                'manfaat_id' => 'm29',
                'manfaat' => 'mencegah kolesterol yang menempel pada dinding pembuluh darah',
                'kandungan' => 'Asam Eikosapentaenoat',
                'url' => 'https://health.grid.id/read/352548003/jangan-dulu-makan-ikan-jika-dalam-kondisi-ini-risikonya-buruk-bagi-kesehatan?page=all'
            ],
            [
                'manfaat_id' => 'm30',
                'manfaat' => 'Mendukung pertumbuhan janin',
                'kandungan' => 'Omega-3',
                'url' => 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-laut/'
            ],
            ]);
    }
}
