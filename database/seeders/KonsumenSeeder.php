<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonsumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konsumen')->insert([
            [
                'konsumen_id' => 'k01',
                'jenis_konsumen' => 'Semua Konsumen'
            ],
            [
                'konsumen_id' => 'k02',
                'jenis_konsumen' => 'Anak-Anak'
            ],
            [
                'konsumen_id' => 'k03',
                'jenis_konsumen' => 'Remaja'
            ],
            [
                'konsumen_id' => 'k04',
                'jenis_konsumen' => 'Wanita'
            ],
            [
                'konsumen_id' => 'k05',
                'jenis_konsumen' => 'Ibu Hamil'
            ],
            [
                'konsumen_id' => 'k06',
                'jenis_konsumen' => 'Lansia'
            ],
            [
                'konsumen_id' => 'k07',
                'jenis_konsumen' => 'Lansia Osteoporosis'
            ],
            [
                'konsumen_id' => 'k08',
                'jenis_konsumen' => 'Penderita Demam Berdarah atau Tifus'
            ],
        ]);
    }
}
