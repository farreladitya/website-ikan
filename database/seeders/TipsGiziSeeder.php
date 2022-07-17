<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipsGiziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipsgizi')->insert([
            [
                'gizi_id' => 'g4',
                'tipsgizi' => 'Pasien dengan penyakit hemoragik seperti trombositopenia, hemofilia, dan defisiensi vitamin K'
            ],
            [
                'gizi_id' => 'g18',
                'tipsgizi' => 'Kenali kebutuhan garam harian sesuai usia dan kondisi kesehatan tubuh,Hindari konsumsi terlalu banyak pada orang yang menderita hipertensi'
            ],
            [
                'gizi_id' => 'g20',
                'tipsgizi' => 'Omega 3 sekitar 1,6 gram setiap hari'
            ],
        ]);
    }
}
