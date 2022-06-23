<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outlet')->insert([
            'id_outlet' => 'o1',
            'foto_outlet' => '',
            'nama_outlet' => 'Freezy Fresh',
            'persebaran' => 'Banten',
            'nama_ikan' => 'Ribbon Fish',
            'url' => '([https://www.tokopedia.com/freezyfresh/fillet-ikan-layur-grade-b?src=topads] , [https://www.freezyfresh.com/])',
            'kategori' => '1',
            'lokasi' => '',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o2',
            'foto_outlet' => '',
            'nama_outlet' => 'PT. Bahari Biru Nusantara',
            'persebaran' => 'Tuban',
            'nama_ikan' => 'Ribbon Fish',
            'url' => 'https://www.baruna.net/',
            'kategori' => '2',
            'lokasi' => '',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o3',
            'foto_outlet' => '',
            'nama_outlet' => 'Toko Hayati Fresh & Frozen Seafood Supplier',
            'persebaran' => 'Laut Jawa|Selat Sunda',
            'nama_ikan' => 'Dori|Udang|Cumi-Cumi|Kakap',
            'url' => 'https://www.indotrading.com/hayatifreshfrozenseafoodsupplier',
            'kategori' => '1',
            'lokasi' => 'Ruko Pluit Timur, Jalan Pluit Timur Blok L.Timur No: 18, Jakarta Utara, DKI Jakarta',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o4',
            'foto_outlet' => '',
            'nama_outlet' => 'Vanda Seafood',
            'persebaran' => 'Laut Jawa|Selat Sunda',
            'nama_ikan' => 'Dori|Cumi-Cumi',
            'url' => 'https://www.indotrading.com/vandaseafood',
            'kategori' => '3',
            'lokasi' => 'Jl. Jelambar Madya Barat 9 Kavling Polri Blok A 15 No 356 Jelambar, Grogol, DKI Jakarta',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o5',
            'foto_outlet' => '',
            'nama_outlet' => 'Samudera Salmon Semesta',
            'persebaran' => '',
            'nama_ikan' => 'Ribbon Fish',
            'url' => 'https://www.indotrading.com/samuderasalmonsemesta',
            'kategori' => '1',
            'lokasi' => '',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o6',
            'foto_outlet' => '',
            'nama_outlet' => 'CV Wijaya Sukses Bersama',
            'persebaran' => 'Utara Jawa',
            'nama_ikan' => 'Udang|Cumi-Cumi|Dori|Kakap|Kerapu',
            'url' => 'https://cv-wijaya-sukses-bersama.business.site/',
            'kategori' => '1',
            'lokasi' => '',
        ]);
    }
}
