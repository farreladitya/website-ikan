<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManfaatKonsumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('manfaat_konsumen')->insert([
            [
                'manfaat_id' => 'm01',
                'konsumen_id' => 'k02'
            ],
            [
                'manfaat_id' => 'm09',
                'konsumen_id' => 'k07'
            ],
            [
                'manfaat_id' => 'm06',
                'konsumen_id' => 'k02'
            ],
            [
                'manfaat_id' => 'm17',
                'konsumen_id' => 'k05'
            ],
            [
                'manfaat_id' => 'm25',
                'konsumen_id' => 'k02'
            ],
            [
                'manfaat_id' => 'm27',
                'konsumen_id' => 'k02'
            ],
            [
                'manfaat_id' => 'm28',
                'konsumen_id' => 'k02'
            ],
        ]);
    }
}
