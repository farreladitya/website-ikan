<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IkanSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('ikan')->insert([
            [
                'ikan_id' => 's01',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ribbon Fish',
                'nama_latin' => 'lepturacanthus savala',
                'nama_biasa' => 'Layur',
                'berat_minimal' => 100,
                'berat_maksimal' => 1000,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=349'
            ],
            [
                'ikan_id' => 's02',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Big Eye',
                'nama_latin' => 'priacanthus tayenus',
                'nama_biasa' => 'Swanggi',
                'berat_minimal' => 80,
                'berat_maksimal' => 500,
                'kategori_ikan' => 'Whole Round,Headless',
                'Url_ikan' => 'https://www.baruna.net/?p=354'
            ],
            [
                'ikan_id' => 's03',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Golden Threadfin Bream',
                'nama_latin' => 'nemipterus virgatus',
                'nama_biasa' => 'Kurisi',
                'berat_minimal' => 50,
                'berat_maksimal' => 500,
                'kategori_ikan' => 'Whole Round,Scalles,Headless',
                'Url_ikan' => 'https://www.baruna.net/?p=563'
            ],
            [
                'ikan_id' => 's04',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Soldier Croaker',
                'nama_latin' => 'nibea soldado',
                'nama_biasa' => 'Gulama Papan',
                'berat_minimal' => 50,
                'berat_maksimal' => 500,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=601'
            ],
            [
                'ikan_id' => 's05',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Panna Croaker',
                'nama_latin' => 'panna microdon',
                'nama_biasa' => 'Gulama Pisang',
                'berat_minimal' => 50,
                'berat_maksimal' => 500,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=604'
            ],
            [
                'ikan_id' => 's06',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Tigertooth Croaker',
                'nama_latin' => 'otolithes ruber',
                'nama_biasa' => 'Gulama Gigi Harimau',
                'berat_minimal' => 50,
                'berat_maksimal' => 500,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=610'
            ],
            [
                'ikan_id' => 's07',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Malabar Snapper',
                'nama_latin' => 'lutjanus malabaricus',
                'nama_biasa' => 'Kakap Malabar',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=1118'
            ],
            [
                'ikan_id' => 's08',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Blood Snapper',
                'nama_latin' => 'lutjanus sp',
                'nama_biasa' => 'Kakap Merah',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=382'
            ],
            [
                'ikan_id' => 's09',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Emperor Red Snapper',
                'nama_latin' => 'lutjanus sebae',
                'nama_biasa' => 'Kakap Merah Malabar',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=627'
            ],
            [
                'ikan_id' => 's10',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Leather Jacket',
                'nama_latin' => 'aluterus monoceros',
                'nama_biasa' => 'Sukang',
                'berat_minimal' => 50,
                'berat_maksimal' => 1000,
                'kategori_ikan' => 'Whole Round,Headless,Cleaned',
                'Url_ikan' => 'https://www.baruna.net/?p=715'
            ],
            [
                'ikan_id' => 's11',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Gold Band Snapper',
                'nama_latin' => 'goldband jobfish',
                'nama_biasa' => 'Kakap Anggoli',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=429'
            ],
            [
                'ikan_id' => 's12',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Pinjalo Snapper',
                'nama_latin' => 'pinjalo pinjalo',
                'nama_biasa' => 'Kakap Pinjalo',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=438'
            ],
            [
                'ikan_id' => 's13',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Sandy Grouper',
                'nama_latin' => 'epinephelus sp',
                'nama_biasa' => 'Kerapu',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=660'
            ],
            [
                'ikan_id' => 's14',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Spotted Grouper',
                'nama_latin' => 'epinephelus sp',
                'nama_biasa' => 'Kerapu',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=657'
            ],
            [
                'ikan_id' => 's15',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Strip Grouper',
                'nama_latin' => 'epinephelus sp',
                'nama_biasa' => 'Kerapu',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=662'
            ],
            [
                'ikan_id' => 's16',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Silver Pomfret',
                'nama_latin' => 'pampus argentus',
                'nama_biasa' => 'Bawal Putih',
                'berat_minimal' => 50,
                'berat_maksimal' => 400,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=665'
            ],
            [
                'ikan_id' => 's17',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Black Pomfret',
                'nama_latin' => 'parastromateus niger',
                'nama_biasa' => 'Bawal Hitam',
                'berat_minimal' => 100,
                'berat_maksimal' => 1000,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=668'
            ],
            [
                'ikan_id' => 's18',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Halibut',
                'nama_latin' => 'psettodes erumei',
                'nama_biasa' => 'Halibut',
                'berat_minimal' => 200,
                'berat_maksimal' => 1000,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=671'
            ],
            [
                'ikan_id' => 's19',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Silver Whiting',
                'nama_latin' => 'sillago sihama',
                'nama_biasa' => 'Whiting',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=673'
            ],
            [
                'ikan_id' => 's20',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Whiting',
                'nama_latin' => 'sillago bassensis',
                'nama_biasa' => 'Silver Whiting',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=675'
            ],
            [
                'ikan_id' => 's21',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Lizard Fish',
                'nama_latin' => 'saurida tumbil',
                'nama_biasa' => 'Kadal Laut',
                'berat_minimal' => 200,
                'berat_maksimal' => 1000,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=677'
            ],
            [
                'ikan_id' => 's22',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Silver Biddy',
                'nama_latin' => 'gerres kapas',
                'nama_biasa' => 'Kapasan',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'kategori_ikan' => 'Headless,Guttted',
                'Url_ikan' => 'https://www.baruna.net/?p=679'
            ],
            [
                'ikan_id' => 's23',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Yellow Pike Conger Eel',
                'nama_latin' => 'congresox talabon',
                'nama_biasa' => 'Belut',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,WGGS,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=681'
            ],
            [
                'ikan_id' => 's24',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'String Ray',
                'nama_latin' => 'trigon sp',
                'nama_biasa' => 'Pari',
                'berat_minimal' => 300,
                'berat_maksimal' => 1000,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=684'
            ],
            [
                'ikan_id' => 's25',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Short Leg Octopus',
                'nama_latin' => 'octopus ocellatus',
                'nama_biasa' => 'Gurita Kaki Pendek',
                'berat_minimal' => 30,
                'berat_maksimal' => 300,
                'kategori_ikan' => 'Whole Round,Whole Cleaned,Flower',
                'Url_ikan' => 'https://www.baruna.net/?p=764'
            ],
            [
                'ikan_id' => 's26',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Long Leg Octopus',
                'nama_latin' => 'octopus sp',
                'nama_biasa' => 'Gurita Kaki Panjang',
                'berat_minimal' => 50,
                'berat_maksimal' => 2000,
                'kategori_ikan' => 'Whole Round,Whole Cleaned,Ball',
                'Url_ikan' => 'https://www.baruna.net/?p=766'
            ],
            [
                'ikan_id' => 's27',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Squid',
                'nama_latin' => 'loligo sp',
                'nama_biasa' => 'Cumi-Cumi',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'kategori_ikan' => 'Whole Round,Whole Cleaned,Tube,Ring',
                'Url_ikan' => 'https://www.baruna.net/?p=768'
            ],
            [
                'ikan_id' => 's28',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Cuttle Fish',
                'nama_latin' => 'sepia sp',
                'nama_biasa' => 'Sotong Cangkang Keras',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'kategori_ikan' => 'Whole Round,Whole Cleaned',
                'Url_ikan' => 'https://www.baruna.net/?p=770'
            ],
            [
                'ikan_id' => 's29',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Soft Cuttle Fish',
                'nama_latin' => 'sepia sp',
                'nama_biasa' => 'Sotong cangkang Lunak',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'kategori_ikan' => 'Whole Round,Whole Cleaned',
                'Url_ikan' => 'https://www.baruna.net/?p=772'
            ],
            [
                'ikan_id' => 's30',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Spanish Mackerel',
                'nama_latin' => 'scomberomorus solandri',
                'nama_biasa' => 'Tenggiri',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,Steak',
                'Url_ikan' => 'https://www.baruna.net/?p=755'
            ],
            [
                'ikan_id' => 's31',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Baby Tuna',
                'nama_latin' => 'thunus albacares',
                'nama_biasa' => 'Tuna Sirip Kuning',
                'berat_minimal' => 500,
                'berat_maksimal' => 2000,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=757'
            ],
            [
                'ikan_id' => 's32',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Skipjack Tuna',
                'nama_latin' => 'katsuwonus pelamis',
                'nama_biasa' => 'Cakalang',
                'berat_minimal' => 500,
                'berat_maksimal' => 2000,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=759'
            ],
            [
                'ikan_id' => 's33',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Dolphin Fish',
                'nama_latin' => 'corvphaena hippurus',
                'nama_biasa' => 'Lemadang',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'kategori_ikan' => 'Whole Round,Fillet',
                'Url_ikan' => 'https://www.baruna.net/?p=761'
            ],
            [
                'ikan_id' => 's34',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Milkfish',
                'nama_latin' => 'chanos chanos',
                'nama_biasa' => 'Bandeng',
                'berat_minimal' => 300,
                'berat_maksimal' => 1000,
                'kategori_ikan' => 'Whole Round',
                'Url_ikan' => 'https://www.baruna.net/?p=1110'
            ],
        ]);
    }
}
