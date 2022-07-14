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
                'nama_ikan' => 'Ikan Dori',
                'berat_minimal' => 100,
                'berat_maksimal' => 1000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's02',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kerapu Bebek',
                'berat_minimal' => 80,
                'berat_maksimal' => 500,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Headless'
            ],
            [
                'ikan_id' => 's03',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kerapu Macan',
                'berat_minimal' => 50,
                'berat_maksimal' => 500,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Scalles Headless'
            ],
            [
                'ikan_id' => 's04',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kerapu Lumpur',
                'berat_minimal' => 50,
                'berat_maksimal' => 500,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's05',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kerapu Sunu',
                'berat_minimal' => 50,
                'berat_maksimal' => 500,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's06',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kerapu Cantang',
                'berat_minimal' => 50,
                'berat_maksimal' => 500,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's07',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kakap Merah',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's08',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kakap Domba',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's09',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kakap Batu',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's10',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kakap Sirip Kuning',
                'berat_minimal' => 50,
                'berat_maksimal' => 1000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Headless Cleaned'
            ],
            [
                'ikan_id' => 's11',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Kakap Putih',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's12',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Cumi Bangka',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's13',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Cumi Sero',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's14',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Cumi Asin Kering',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's15',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Sotong',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's16',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Udang Rebon',
                'berat_minimal' => 50,
                'berat_maksimal' => 400,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's17',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Udang Jerbung',
                'berat_minimal' => 100,
                'berat_maksimal' => 1000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's18',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Udang Peci',
                'berat_minimal' => 200,
                'berat_maksimal' => 1000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's19',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Udang Pancet',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's20',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Udang Vaname',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's21',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Udang Galah',
                'berat_minimal' => 200,
                'berat_maksimal' => 1000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's22',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Asin',
                'berat_minimal' => 00,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's23',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Tongkol/Cob',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|WGGS|Fillet'
            ],
            [
                'ikan_id' => 's24',
                'jenis_ikan' => 'Demersal',
                'nama_ikan' => 'Ikan Teri/Anchovy',
                'berat_minimal' => 300,
                'berat_maksimal' => 1000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's25',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Ikan Sarden/Sardines',
                'berat_minimal' => 100,
                'berat_maksimal' => 1000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned|Flower'
            ],
            [
                'ikan_id' => 's26',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Ikan Belanak/Mullet',
                'berat_minimal' => 50,
                'berat_maksimal' => 2000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned|Ball'
            ],
            [
                'ikan_id' => 's27',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Ikan Layur',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned|Tube|Ring'
            ],
            [
                'ikan_id' => 's28',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Ikan Baronang',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
            [
                'ikan_id' => 's29',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Ikan Cod',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
            [
                'ikan_id' => 's30',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Ikan Lele/Catfish',
                'berat_minimal' => 1000,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Steak'
            ],
            [
                'ikan_id' => 's31',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Atlantic Salmon',
                'berat_minimal' => 500,
                'berat_maksimal' => 2000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's32',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Chinook Salmon',
                'berat_minimal' => 500,
                'berat_maksimal' => 2000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's33',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Chum/Dog Salmon',
                'berat_minimal' => 100,
                'berat_maksimal' => 5000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Fillet'
            ],
            [
                'ikan_id' => 's34',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Sockeye Salmon',
                'berat_minimal' => 300,
                'berat_maksimal' => 1000,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's35',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Coho Salmon',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's36',
                'jenis_ikan' => 'Pelagic',
                'nama_ikan' => 'Pink Salmon',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round'
            ],
            [
                'ikan_id' => 's37',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Dungeness Crab',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
            [
                'ikan_id' => 's38',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Alaskan King Crab',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
            [
                'ikan_id' => 's39',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Blue Crab',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
            [
                'ikan_id' => 's40',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Kepiting Bakau',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
            [
                'ikan_id' => 's41',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Lobster',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
            [
                'ikan_id' => 's42',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Pacific Oyster',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
            [
                'ikan_id' => 's43',
                'jenis_ikan' => 'Cephalopod',
                'nama_ikan' => 'Eastern Oyster',
                'berat_minimal' => 0,
                'berat_maksimal' => 0,
                'habitat' => 'Air Laut',
                'kategori_ikan' => 'Whole Round|Whole Cleaned'
            ],
        ]);
    }
}
