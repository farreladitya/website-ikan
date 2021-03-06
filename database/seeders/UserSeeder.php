<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Liefran',
                'email' => 'liefran123@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'user'
            ],
            [
                'name' => 'udbarokah',
                'email' => 'udbarokah@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'mitra'
            ],
            [
                'name' => 'cvwijayasuksesbersama',
                'email' => 'cvwijaya@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'mitra'
            ],
        ]);
    }
}
