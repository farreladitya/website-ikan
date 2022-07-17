<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiriRacunSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('ciriracun')->insert([
            [
                'racun_id' => 'r02',
                'ciriracun' => 'Mata yang bening|Daging yang terlihat cerah|Tidak terdapat bintik-bintik gelap|Hindari beberapa jenis ikan laut yang besar dan hidup di laut dalam'
            ],
            [
                'racun_id' => 'r07',
                'ciriracun' => 'Disebabkan karena dikonsumsi mentah'
            ],
            [
                'racun_id' => 'r14',
                'ciriracun' => 'Disebabkan karena dikonsumsi dengan cara diasap'
            ],
            [
                'racun_id' => 'r15',
                'ciriracun' => 'Disebabkan karena dikonsumsi mentah'
            ],
            [
                'racun_id' => 'r16',
                'ciriracun' => 'Disebabkan karena dikonsumsi mentah'
            ],
            [
                'racun_id' => 'r17',
                'ciriracun' => 'Disebabkan karena dikonsumsi ikan tongkol yang kurang segar'
            ],
            [
                'racun_id' => 'r18',
                'ciriracun' => 'Jika ikan salmon yang dikonsumsi bukan salmon liar melainkan salmon ternak'
            ],
            [
                'racun_id' => 'r19',
                'ciriracun' => 'Jika ikan salmon yang dikonsumsi bukan salmon liar melainkan salmon ternak'
            ],
            [
                'racun_id' => 'r20',
                'ciriracun' => 'Jika ikan salmon yang dikonsumsi bukan salmon liar melainkan salmon ternak'
            ],
            [
                'racun_id' => 'r21',
                'ciriracun' => 'Jika dikonsumsi dengan cara diasapi'
            ],
            [
                'racun_id' => 'r22',
                'ciriracun' => 'Disebabkan konsumsi ikan pari terpapar Merkuri oleh ibu hamil Makan ikan 8-12 ons/minggu saja'
            ],
            [
                'racun_id' => 'r23',
                'ciriracun' => 'Disebabkan konsumsi ikan pari terkontaminasi mikroorganisme dinoflagellata, pantogen, dan parasit usus.'
            ],
            [
                'racun_id' => 'r24',
                'ciriracun' => 'Disebabkan konsumsi ikan pari terkontaminasi mikroorganisme dinoflagellata, pantogen, dan parasit usus'
            ],
            [
                'racun_id' => 'r25',
                'ciriracun' => 'Disebabkan konsumsi ikan pari terkontaminasi mikroorganisme dinoflagellata, pantogen, dan parasit usus'
            ],
            [
                'racun_id' => 'r28',
                'ciriracun' => 'Disebabkan konsumsi ikan pari terpapar Merkuri terus menerus'
            ],

        ]);
    }
}
