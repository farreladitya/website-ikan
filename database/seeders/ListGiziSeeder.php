<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListGiziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_gizi')->insert([
            [
                'gizi_id' => 'g1',
                'nama_gizi' => 'Albumin'
            ],
            [
                'gizi_id' => 'g2',
                'nama_gizi' => 'Anthocyanin'
            ],
            [
                'gizi_id' => 'g3',
                'nama_gizi' => 'Antioksidan'
            ],
            [
                'gizi_id' => 'g4',
                'nama_gizi' => 'Asam Eikosapentaenoat'
            ],
            [
                'gizi_id' => 'g5',
                'nama_gizi' => 'Asam Lemak'
            ],
            [
                'gizi_id' => 'g6',
                'nama_gizi' => 'Astaxanthin'
            ],
            [
                'gizi_id' => 'g7',
                'nama_gizi' => 'Docosahexanoic acid (DHA)'
            ],
            [
                'gizi_id' => 'g8',
                'nama_gizi' => 'Fosfor'
            ],
            [
                'gizi_id' => 'g9',
                'nama_gizi' => 'Kalium'
            ],
            [
                'gizi_id' => 'g10',
                'nama_gizi' => 'Kalori'
            ],
            [
                'gizi_id' => 'g11',
                'nama_gizi' => 'Kalsium'
            ],
            [
                'gizi_id' => 'g12',
                'nama_gizi' => 'Kolin'
            ],
            [
                'gizi_id' => 'g13',
                'nama_gizi' => 'Lemak'
            ],
            [
                'gizi_id' => 'g14',
                'nama_gizi' => 'Likopen'
            ],
            [
                'gizi_id' => 'g15',
                'nama_gizi' => 'Magnesium'
            ],
            [
                'gizi_id' => 'g16',
                'nama_gizi' => 'Mineral'
            ],
            [
                'gizi_id' => 'g17',
                'nama_gizi' => 'Natrium'
            ],
            [
                'gizi_id' => 'g18',
                'nama_gizi' => 'Oksida Nitrat'
            ],
            [
                'gizi_id' => 'g19',
                'nama_gizi' => 'Omega-3'
            ],
            [
                'gizi_id' => 'g20',
                'nama_gizi' => 'Omega-9'
            ],
            [
                'gizi_id' => 'g21',
                'nama_gizi' => 'Polifenol'
            ],
            [
                'gizi_id' => 'g22',
                'nama_gizi' => 'Protein'
            ],
            [
                'gizi_id' => 'g23',
                'nama_gizi' => 'Riboflavin'
            ],
            [
                'gizi_id' => 'g24',
                'nama_gizi' => 'Selenium'
            ],
            [
                'gizi_id' => 'g25',
                'nama_gizi' => 'Serat'
            ],
            [
                'gizi_id' => 'g26',
                'nama_gizi' => 'Vitamin A'
            ],
            [
                'gizi_id' => 'g27',
                'nama_gizi' => 'Vitamin B Kompleks'
            ],
            [
                'gizi_id' => 'g28',
                'nama_gizi' => 'Vitamin B1'
            ],
            [
                'gizi_id' => 'g29',
                'nama_gizi' => 'Vitamin B12'
            ],
            [
                'gizi_id' => 'g30',
                'nama_gizi' => 'Vitamin B2'
            ],
            [
                'gizi_id' => 'g31',
                'nama_gizi' => 'Vitamin B3'
            ],
            [
                'gizi_id' => 'g32',
                'nama_gizi' => 'Vitamin B5'
            ],
            [
                'gizi_id' => 'g33',
                'nama_gizi' => 'Vitamin B6'
            ],
            [
                'gizi_id' => 'g34',
                'nama_gizi' => 'Vitamin C'
            ],
            [
                'gizi_id' => 'g35',
                'nama_gizi' => 'Vitamin D'
            ],
            [
                'gizi_id' => 'g36',
                'nama_gizi' => 'Vitamin E'
            ],
            [
                'gizi_id' => 'g37',
                'nama_gizi' => 'Vitamin K'
            ],
            [
                'gizi_id' => 'g38',
                'nama_gizi' => 'Yodium'
            ],
            [
                'gizi_id' => 'g39',
                'nama_gizi' => 'Zat Besi'
            ],
            [
                'gizi_id' => 'g40',
                'nama_gizi' => 'Zinc'
            ],
        ]);
    }
}
