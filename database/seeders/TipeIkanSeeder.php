<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeIkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipeikan')->insert([

                'tipe' => 'Fresh'
        ]);
        DB::table('tipeikan')->insert([

                'tipe' => 'Frozen'

        ]);
    }
}
