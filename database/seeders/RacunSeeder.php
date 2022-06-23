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
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r02',
                'nama_racun' => 'Merkuri',
                'ket_kondisi' => 'Mata yang bening|Daging yang terlihat cerah|Tidak terdapat bintik-bintik gelap|Hindari beberapa jenis ikan laut yang besar dan hidup di laut dalam'
            ],
            [
                'racun_id' => 'r03',
                'nama_racun' => 'Kadmium',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r04',
                'nama_racun' => 'Anisakis Simplex',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r05',
                'nama_racun' => 'Cestodes',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r06',
                'nama_racun' => 'Vibrio',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r07',
                'nama_racun' => 'Salmonella',
                'ket_kondisi' => 'Disebabkan karena dikonsumsi mentah'
            ],
            [
                'racun_id' => 'r08',
                'nama_racun' => 'Shigella',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r09',
                'nama_racun' => 'Clostridium Botulinum',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r10',
                'nama_racun' => 'Staphylococcus Aureus',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r11',
                'nama_racun' => 'Clostridium Perfringens',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r12',
                'nama_racun' => 'Bacillus Cereus',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r13',
                'nama_racun' => 'Nitrosamin',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r14',
                'nama_racun' => 'Bakteri Listeriosis',
                'ket_kondisi' => 'Disebabkan karena dikonsumsi dengan cara diasap'
            ],
            [
                'racun_id' => 'r15',
                'nama_racun' => 'Methyl Mercury',
                'ket_kondisi' => 'Disebabkan karena dikonsumsi mentah'
            ],
            [
                'racun_id' => 'r16',
                'nama_racun' => 'Vibrio Vulnificus',
                'ket_kondisi' => 'Disebabkan karena dikonsumsi mentah'
            ],
            [
                'racun_id' => 'r17',
                'nama_racun' => 'Toksin Scombroid',
                'ket_kondisi' => 'Disebabkan karena dikonsumsi ikan tongkol yang kurang segar'
            ],
            [
                'racun_id' => 'r18',
                'nama_racun' => 'Dioxins',
                'ket_kondisi' => 'Jika ikan salmon yang dikonsumsi bukan salmon liar melainkan salmon ternak'
            ],
            [
                'racun_id' => 'r19',
                'nama_racun' => 'Polychlorinated Biphenyls (PCBs)',
                'ket_kondisi' => 'Jika ikan salmon yang dikonsumsi bukan salmon liar melainkan salmon ternak'
            ],
            [
                'racun_id' => 'r20',
                'nama_racun' => 'Obat-Obatan Kimiawi',
                'ket_kondisi' => 'Jika ikan salmon yang dikonsumsi bukan salmon liar melainkan salmon ternak'
            ],
            [
                'racun_id' => 'r21',
                'nama_racun' => 'Kandungan Karbon Dioksida',
                'ket_kondisi' => 'Jika dikonsumsi dengan cara diasapi'
            ],
            [
                'racun_id' => 'r22',
                'nama_racun' => ' Metylmercury',
                'ket_kondisi' => 'Disebabkan konsumsi ikan pari terkontaminasi mikroorganisme dinoflagellata, pantogen, dan parasit usus'
            ],
            [
                'racun_id' => 'r23',
                'nama_racun' => 'Mikroorganisme Dinoflagellata',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r24',
                'nama_racun' => 'Pantogen',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r25',
                'nama_racun' => 'Parasit Usus',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r26',
                'nama_racun' => 'Garam Inorganik',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r27',
                'nama_racun' => 'Phenyl Mercury',
                'ket_kondisi' => null
            ],
            [
                'racun_id' => 'r28',
                'nama_racun' => 'Kandungan Mikroplastik',
                'ket_kondisi' => 'Disebabkan konsumsi ikan pari terpapar Merkuri terus menerus'
            ],
            [
                'racun_id' => 'r29',
                'nama_racun' => 'Kandungan Ciguatoxin',
                'ket_kondisi' => null
            ],
        ]);
    }
}
