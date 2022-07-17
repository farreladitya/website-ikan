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
            'persebaran' => 'Pulang Bangka',
            'nama_ikan' => 'Cumi Bangka',
            'url' => 'https://www.tokopedia.com/freezyfresh/fillet-ikan-layur-grade-b?src=topads',
            'kategori' => '1',
            'lokasi' => 'Ruko Pluit Timur, Jalan Pluit Timur Blok L.Timur No: 18, Jakarta Utara, DKI Jakarta',
            'jenis' => 'offline',
            'harga' => '30000',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o2',
            'foto_outlet' => '',
            'nama_outlet' => 'Layur Store',
            'persebaran' => 'Pulang Bangka',
            'nama_ikan' => 'Cumi Bangka',
            'url' => 'https://www.tokopedia.com/freezyfresh/fillet-ikan-layur-grade-b?src=topads',
            'kategori' => '1',
            'lokasi' => '',
            'jenis' => 'online',
            'harga' => '45000',
        ]);

    }
}
