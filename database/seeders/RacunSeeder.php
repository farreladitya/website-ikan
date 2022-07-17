<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('racun')->insert([
            [
                'racun_id' => 'r01',
                'nama_racun' => 'Timbal',
            ],
            [
                'racun_id' => 'r02',
                'nama_racun' => 'Merkuri',
            ],
            [
                'racun_id' => 'r03',
                'nama_racun' => 'Kadmium',
            ],
            [
                'racun_id' => 'r04',
                'nama_racun' => 'Anisakis Simplex',
            ],
            [
                'racun_id' => 'r05',
                'nama_racun' => 'Cestodes',
            ],
            [
                'racun_id' => 'r06',
                'nama_racun' => 'Vibrio',
            ],
            [
                'racun_id' => 'r07',
                'nama_racun' => 'Salmonella',
            ],
            [
                'racun_id' => 'r08',
                'nama_racun' => 'Shigella',
            ],
            [
                'racun_id' => 'r09',
                'nama_racun' => 'Clostridium Botulinum',
            ],
            [
                'racun_id' => 'r10',
                'nama_racun' => 'Staphylococcus Aureus',
            ],
            [
                'racun_id' => 'r11',
                'nama_racun' => 'Clostridium Perfringens',
            ],
            [
                'racun_id' => 'r12',
                'nama_racun' => 'Bacillus Cereus',
            ],
            [
                'racun_id' => 'r13',
                'nama_racun' => 'Nitrosamin',
            ],
            [
                'racun_id' => 'r14',
                'nama_racun' => 'Bakteri Listeriosis',
            ],
            [
                'racun_id' => 'r15',
                'nama_racun' => 'Methyl Mercury',
            ],
            [
                'racun_id' => 'r16',
                'nama_racun' => 'Vibrio Vulnificus',
            ],
            [
                'racun_id' => 'r17',
                'nama_racun' => 'Toksin Scombroid',
            ],
            [
                'racun_id' => 'r18',
                'nama_racun' => 'Dioxins',
            ],
            [
                'racun_id' => 'r19',
                'nama_racun' => 'Polychlorinated Biphenyls (PCBs)',
            ],
            [
                'racun_id' => 'r20',
                'nama_racun' => 'Obat-Obatan Kimiawi',
            ],
            [
                'racun_id' => 'r21',
                'nama_racun' => 'Kandungan Karbon Dioksida',
            ],
            [
                'racun_id' => 'r22',
                'nama_racun' => ' Metylmercury',
            ],
            [
                'racun_id' => 'r23',
                'nama_racun' => 'Mikroorganisme Dinoflagellata',
            ],
            [
                'racun_id' => 'r24',
                'nama_racun' => 'Pantogen',
            ],
            [
                'racun_id' => 'r25',
                'nama_racun' => 'Parasit Usus',
            ],
            [
                'racun_id' => 'r26',
                'nama_racun' => 'Garam Inorganik',
            ],
            [
                'racun_id' => 'r27',
                'nama_racun' => 'Phenyl Mercury',
            ],
            [
                'racun_id' => 'r28',
                'nama_racun' => 'Kandungan Mikroplastik',
            ],
            [
                'racun_id' => 'r29',
                'nama_racun' => 'Kandungan Ciguatoxin',
            ],
        ]);
    }
}
