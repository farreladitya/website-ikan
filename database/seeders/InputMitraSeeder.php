<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InputMitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('input_mitra_tables')->insert([
            [
                'user_id' => 2,
                'nama_mitra' => 'udbarokah',
                'ikan' => 'Kapasan',
                'tipeikan' => '',
                'harga' => ,
                'gambar' =>
            ],
        ]);
    }
}
