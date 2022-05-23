<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailIkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_ikan')->insert([
            [
                'ikan_id' => 's01',
                'tekstur_daging' => 1,
                'bau_amis' => 2,
                'berminyak' => 2,
                'duri' => 2
            ],
        ]);
    }
}
