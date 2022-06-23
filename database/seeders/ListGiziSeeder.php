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
                'nama_gizi' => 'Albumin',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g2',
                'nama_gizi' => 'Anthocyanin',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g3',
                'nama_gizi' => 'Antioksidan',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g4',
                'nama_gizi' => 'Asam Eikosapentaenoat',
                'ket_kondisi' => 'Pasien dengan penyakit hemoragik seperti trombositopenia, hemofilia, dan defisiensi vitamin K'
            ],
            [
                'gizi_id' => 'g5',
                'nama_gizi' => 'Asam Lemak',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g6',
                'nama_gizi' => 'Astaxanthin',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g7',
                'nama_gizi' => 'Docosahexanoic acid (DHA)',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g8',
                'nama_gizi' => 'Fosfor',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g9',
                'nama_gizi' => 'Kalium',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g10',
                'nama_gizi' => 'Kalori',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g11',
                'nama_gizi' => 'Kalsium',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g12',
                'nama_gizi' => 'Kolin',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g13',
                'nama_gizi' => 'Lemak',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g14',
                'nama_gizi' => 'Likopen',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g15',
                'nama_gizi' => 'Magnesium',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g16',
                'nama_gizi' => 'Mineral',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g17',
                'nama_gizi' => 'Natrium',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g18',
                'nama_gizi' => 'Oksida Nitrat',
                'ket_kondisi' => 'Kenali kebutuhan garam harian sesuai usia dan kondisi kesehatan tubuh,Hindari konsumsi terlalu banyak pada orang yang menderita hipertensi'
            ],
            [
                'gizi_id' => 'g19',
                'nama_gizi' => 'Omega-3',
                'ket_kondisi' => 'Omega 3 sekitar 1,6 gram setiap hari'
            ],
            [
                'gizi_id' => 'g20',
                'nama_gizi' => 'Omega-9',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g21',
                'nama_gizi' => 'Polifenol',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g22',
                'nama_gizi' => 'Protein',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g23',
                'nama_gizi' => 'Riboflavin',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g24',
                'nama_gizi' => 'Selenium',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g25',
                'nama_gizi' => 'Serat',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g26',
                'nama_gizi' => 'Vitamin A',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g27',
                'nama_gizi' => 'Vitamin B Kompleks',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g28',
                'nama_gizi' => 'Vitamin B1',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g29',
                'nama_gizi' => 'Vitamin B12',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g30',
                'nama_gizi' => 'Vitamin B2',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g31',
                'nama_gizi' => 'Vitamin B3',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g32',
                'nama_gizi' => 'Vitamin B5',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g33',
                'nama_gizi' => 'Vitamin B6',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g34',
                'nama_gizi' => 'Vitamin C',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g35',
                'nama_gizi' => 'Vitamin D',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g36',
                'nama_gizi' => 'Vitamin E',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g37',
                'nama_gizi' => 'Vitamin K',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g38',
                'nama_gizi' => 'Yodium',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g39',
                'nama_gizi' => 'Zat Besi',
                'ket_kondisi' => null
            ],
            [
                'gizi_id' => 'g40',
                'nama_gizi' => 'Zinc',
                'ket_kondisi' => null
            ],
        ]);
    }
}
