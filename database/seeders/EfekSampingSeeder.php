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
                'ktrt_gizi' => null,
                'ktrt_kondisi' => null,
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd02',
                'efek_samping' => 'Risiko penyakit autoimun',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => 'Mata yang bening,Daging yang terlihat cerah,Tidak terdapat bintik-bintik gelap,Hindari beberapa jenis ikan laut yang besar dan hidup di laut dalam',
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd04',
                'efek_samping' => 'Diare',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Anisakis Simplex Dan Cestodes',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => null,
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd05',
                'efek_samping' => 'Mual',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Vibrio, Salmonella, Shigella, Clostridium Botulinum, Staphylococcus Aureus, Clostridium Perfringens, Dan Bacillus Cereus',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => null,
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd06',
                'efek_samping' => 'Muntah',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Vibrio, Salmonella, Shigella, Clostridium Botulinum, Staphylococcus Aureus, Clostridium Perfringens, Dan Bacillus Cereus',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => null,
                'url_efek_samping' => 'https://www.merdeka.com/jabar/5-bahaya-seafood-bagi-kesehatan-tubuh-salah-satunya-sebabkan-infeksi-bakteri-kln.html#:~:text=Asupan%20ikan%20yang%20berlebihan%20dan,kesehatan%20kognitif%2C%20mental%20dan%20fisik.&text=Studi%20mengatakan%20bahwa%20manfaat%20kardiovaskular,ada%20di%20dalam%20makanan%20laut.'
            ],
            [
                'efek_samping_id' => 'd08',
                'efek_samping' => 'Diabetes tingkat dua',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => null,
                'ktrt_gizi' => 'Omega-3',
                'ktrt_kondisi' => 'Omega-3 sekitar 1,6 gram setiap hari',
                'url_efek_samping' => 'https://health.kompas.com/read/2016/09/15/103838223/efek.samping.kebanyakan.makan.ikan.laut.dalam'
            ],
            [
                'efek_samping_id' => 'd10',
                'efek_samping' => 'Otot terasa lemas',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => 'Mata yang bening,Daging yang terlihat cerah,Tidak terdapat bintik-bintik gelap,Hindari beberapa jenis ikan laut yang besar dan hidup di laut dalam',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi'
            ],
            [
                'efek_samping_id' => 'd11',
                'efek_samping' => 'Koordinasi anggota tubuh menurun',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => 'Mata yang bening,Daging yang terlihat cerah,Tidak terdapat bintik-bintik gelap,Hindari beberapa jenis ikan laut yang besar dan hidup di laut dalam',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi'
            ],
            [
                'efek_samping_id' => 'd12',
                'efek_samping' => 'Sistem indera perasa terganggu',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => 'Mata yang bening,Daging yang terlihat cerah,Tidak terdapat bintik-bintik gelap,Hindari beberapa jenis ikan laut yang besar dan hidup di laut dalam',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi'
            ],
            [
                'efek_samping_id' => 'd13',
                'efek_samping' => 'Gangguan pada penglihatan perifer',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => 'Mata yang bening,Daging yang terlihat cerah,Tidak terdapat bintik-bintik gelap,Hindari beberapa jenis ikan laut yang besar dan hidup di laut dalam',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi'
            ],
            [
                'efek_samping_id' => 'd14',
                'efek_samping' => 'Kesulitan berjalan, mendengar, dan berbicara',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => 'Mata yang bening,Daging yang terlihat cerah,Tidak terdapat bintik-bintik gelap,Hindari beberapa jenis ikan laut yang besar dan hidup di laut dalam',
                'url_efek_samping' => 'https://www.halodoc.com/artikel/bahaya-ikan-yang-keracunan-Merkuri-jika-dikonsumsi,https://www.aia-financial.co.id/id/PMM/Artikel-38-Mengonsumsi-ikan-laut-dan-dampaknya-terhadap-kesehatan.html'
            ],
            [
                'efek_samping_id' => 'd18',
                'efek_samping' => 'Keterlambatan perkembangan pada anak-anak',
                'nama_ikan' => 'Semua ikan laut',
                'ktrt_racun' => 'Merkuri',
                'ktrt_gizi' => null,
                'ktrt_kondisi' => 'Disebabkan konsumsi ikan terpapar Merkuri oleh anak-anak secara terus-menerus',
                'url_efek_samping' => 'https://www.klikdokter.com/info-sehat/read/3616043/amankah-anak-makan-ikan-setiap-hari,https://manado.tribunnews.com/2019/02/06/ini-efek-baik-dan-buruknya-makan-ikan-setiap-hari-simak-penjelasannya#google_vignette'
            ],
        ]);
    }
}
