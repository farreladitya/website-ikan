<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            IkanSeeder::class,
            HargaSeeder::class,
            FotoSeeder::class,
            PersebaranSeeder::class,
            DetailIkanSeeder::class,
            ulasanSeeder::class,
            CekKualitasSeeder::class,
            GiziIkanSeeder::class,
            ManfaatSeeder::class,
            KonsumenSeeder::class,
            ManfaatKonsumenSeeder::class,
            UserSeeder::class,
            RacunSeeder::class,
            ListGiziSeeder::class,
            EfekSampingSeeder::class,
            OutletSeeder::class,
        ]);
    }
}
