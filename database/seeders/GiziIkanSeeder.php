<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiziIkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gizi')->insert([
            [
                'ikan_id' => 's01',
                'gizi' => 'Kalori 84 kkal,Lemak 4.11 gram,Kolestrol 32 mg,Protein 11.02 mg,Sodium 27 mg, Kalium 206 mg',
                'racun' => null,
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/898/nilai-kandungan-gizi-ikan-layur-segar'
            ],
            [
                'ikan_id' => 's02',
                'gizi' => 'Kalori 230 kkal,Protein 48 gram,Selenium 91.25 mikrogram,Omega3 0.65 gram,Fosfor 405 miligram,Vitamin B6 0.75 miligram,Vitamin B5 1.875 miligram,Vitamin B12 1.5 mikrogram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-kembung/'
            ],
            [
                'ikan_id' => 's03',
                'gizi' => 'Kalori 230 kkal,Protein 48 gram,Selenium 91.25 mikrogram,Omega3 0.65 gram,Fosfor 405 miligram,Vitamin B6 0.75 miligram,Vitamin B5 1.875 miligram,Vitamin B12 1.5 mikrogram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/935/nilai-kandungan-gizi-kuro-segar,https://www.panganku.org/id-ID/view'
            ],
            [
                'ikan_id' => 's04',
                'gizi' => 'Kalori 230 kkal,Protein 48 gram,Selenium 91.25 mikrogram,Omega3 0.65 gram,Fosfor 405 miligram,Vitamin B6 0.75 miligram,Vitamin B5 1.875 miligram,Vitamin B12 1.5 mikrogram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/935/nilai-kandungan-gizi-kuro-segar,https://www.panganku.org/id-ID/view'
            ],
            [
                'ikan_id' => 's05',
                'gizi' => 'Kalori 230 kkal,Protein 48 gram,Selenium 91.25 mikrogram,Omega3 0.65 gram,Fosfor 405 miligram,Vitamin B6 0.75 miligram,Vitamin B5 1.875 miligram,Vitamin B12 1.5 mikrogram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/935/nilai-kandungan-gizi-kuro-segar,https://www.panganku.org/id-ID/view'
            ],
            [
                'ikan_id' => 's06',
                'gizi' => 'Kalori 230 kkal,Protein 48 gram,Selenium 91.25 mikrogram,Omega3 0.65 gram,Fosfor 405 miligram,Vitamin B6 0.75 miligram,Vitamin B5 1.875 miligram,Vitamin B12 1.5 mikrogram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/935/nilai-kandungan-gizi-kuro-segar,https://www.panganku.org/id-ID/view'
            ],
            [
                'ikan_id' => 's07',
                'gizi' => 'Energi 92 kkal,Protein 20 gram,Lemak 0.70 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's08',
                'gizi' => 'Energi 92 kkal,Protein 20 gram,Lemak 0.70 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's09',
                'gizi' => 'Energi 92 kkal,Protein 20 gram,Lemak 0.70 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's10',
                'gizi' => 'Kalori 159 gram,Protein 40 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://manfaat.co.id/manfaat-ikan-sukang'
            ],
            [
                'ikan_id' => 's11',
                'gizi' => 'Energi 92 kkal,Protein 20 gram,Lemak 0.70 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's12',
                'gizi' => 'Kalori 75 kkal,Air 82.2 gram,Protein 16.1 gram,Kalsium 32 mg,Natrium 37 mg,Fosfor 200 mg,Kalium 204.1 mg,Beta karoten 20 mcg,Vitamin B12 1.3 mcg,Vitamin E 1.2 mcg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's13',
                'gizi' => 'Kalori 75 kkal,Air 82.2 gram,Protein 16.1 gram,Kalsium 32 mg,Natrium 37 mg,Fosfor 200 mg,Kalium 204.1 mg,Beta karoten 20 mcg,Vitamin B12 1.3 mcg,Vitamin E 1.2 mcg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's14',
                'gizi' => 'Kalori 75 kkal,Air 82.2 gram,Protein 16.1 gram,Kalsium 32 mg,Natrium 37 mg,Fosfor 200 mg,Kalium 204.1 mg,Beta karoten 20 mcg,Vitamin B12 1.3 mcg,Vitamin E 1.2 mcg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's15',
                'gizi' => 'Kalori 75 kkal,Air 82.2 gram,Protein 16.1 gram,Kalsium 32 mg,Natrium 37 mg,Fosfor 200 mg,Kalium 204.1 mg,Beta karoten 20 mcg,Vitamin B12 1.3 mcg,Vitamin E 1.2 mcg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's16',
                'gizi' => 'Kalori 91 kkal,Protein 19 gram,Lemak 1.7 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/870/nilai-kandungan-gizi-ikan-bawal-segar'
            ],
            [
                'ikan_id' => 's17',
                'gizi' => 'Kalori 91 kkal,Lemak 0.2 gram,Karbohidrat 0.1 gram,Protein 21 gram,Kalsium 136 mcg, Fosfor 170 mg,Kalium 222 mg,Vitamin B3 3.7 mg,B-karoten 4 mcg,Air 75 gram',
                'racun' => null,
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/870/nilai-kandungan-gizi-ikan-bawal-segar'
            ],
            [
                'ikan_id' => 's18',
                'gizi' => 'Kalori 91 kkal,Lemak 0.2 gram,Karbohidrat 0.1 gram,Protein 21 gram,Kalsium 136 mcg, Fosfor 170 mg,Kalium 222 mg,Vitamin B3 3.7 mg,B-karoten 4 mcg,Air 75 gram',
                'racun' => null,
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/870/nilai-kandungan-gizi-ikan-bawal-segar'
            ],
            [
                'ikan_id' => 's19',
                'gizi' => 'Kalori 91 kkal,Lemak 0.2 gram,Karbohidrat 0.1 gram,Protein 21 gram,Kalsium 136 mcg, Fosfor 170 mg,Kalium 222 mg,Vitamin B3 3.7 mg,B-karoten 4 mcg,Air 75 gram',
                'racun' => null,
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/870/nilai-kandungan-gizi-ikan-bawal-segar'
            ],
            [
                'ikan_id' => 's20',
                'gizi' => 'Kalori 91 kkal,Lemak 0.2 gram,Karbohidrat 0.1 gram,Protein 21 gram,Kalsium 136 mcg, Fosfor 170 mg,Kalium 222 mg,Vitamin B3 3.7 mg,B-karoten 4 mcg,Air 75 gram',
                'racun' => null,
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/870/nilai-kandungan-gizi-ikan-bawal-segar'
            ],
            [
                'ikan_id' => 's21',
                'gizi' => 'Kalori 91 kkal,Lemak 0.2 gram,Karbohidrat 0.1 gram,Protein 21 gram,Kalsium 136 mcg, Fosfor 170 mg,Kalium 222 mg,Vitamin B3 3.7 mg,B-karoten 4 mcg,Air 75 gram',
                'racun' => null,
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/870/nilai-kandungan-gizi-ikan-bawal-segar'
            ],
            [
                'ikan_id' => 's22',
                'gizi' => 'Energi 193 kcal,Protein 42 gram,Lemak 1,5 gram,Kalsium 200 miligram,Fosfor 300 miligram,Zat besi,3 miligram,Vitamin B1 0.01 miligram',
                'racun' => null,
                'url_gizi'=> 'https://www.bukalapak.com/p/food/makanan/1in5qak-jual-ikan-kapasan-tawar-ikan-kapas-kapas-tawar-ikan-kapas-kapas'
            ],
            [
                'ikan_id' => 's23',
                'gizi' => 'Air (Water) 74.7 g,Energi (Energy) 100 Kal,Protein (Protein) 13.7 g,Lemak (Fat) 1.5 g,Karbohidrat (CHO) 8.0 g,Abu (ASH) 2.1 g,Kalsium (Ca) 92 mg,Fosfor (P) 606 mg,Besi (Fe) 1.7 mg,Natrium (Na) 202 mg,Kalium (K) 227.0 mg,Tembaga (Cu) 0.20 mg,Seng (Zn) 1.6 mg,Retinol (Vit. A) 181 mcg,Thiamin (Vit. B1) 0.35 mg,Riboflavin (Vit. B2) 0.03 mg,Niasin (Niacin) 6.6 mg',
                'racun' => null,
                'url_gizi'=> 'https://cantik.tempo.co/read/1247668/bosan-menu-mpasi-ayam-atau-ikan-ganti-belut-yang-kaya-gizi/full&view=ok'
            ],
            [
                'ikan_id' => 's24',
                'gizi' => 'Air (Water) 74.7 g,Energi (Energy) 100 Kal,Protein (Protein) 13.7 g,Lemak (Fat) 1.5 g,Karbohidrat (CHO) 8.0 g,Abu (ASH) 2.1 g,Kalsium (Ca) 92 mg,Fosfor (P) 606 mg,Besi (Fe) 1.7 mg,Natrium (Na) 202 mg,Kalium (K) 227.0 mg,Tembaga (Cu) 0.20 mg,Seng (Zn) 1.6 mg,Retinol (Vit. A) 181 mcg,Thiamin (Vit. B1) 0.35 mg,Riboflavin (Vit. B2) 0.03 mg,Niasin (Niacin) 6.6 mg',
                'racun' => null,
                'url_gizi'=> 'https://cantik.tempo.co/read/1247668/bosan-menu-mpasi-ayam-atau-ikan-ganti-belut-yang-kaya-gizi/full&view=ok'
            ],
            [
                'ikan_id' => 's25',
                'gizi' => 'Air (Water) 74.7 g,Energi (Energy) 100 Kal,Protein (Protein) 13.7 g,Lemak (Fat) 1.5 g,Karbohidrat (CHO) 8.0 g,Abu (ASH) 2.1 g,Kalsium (Ca) 92 mg,Fosfor (P) 606 mg,Besi (Fe) 1.7 mg,Natrium (Na) 202 mg,Kalium (K) 227.0 mg,Tembaga (Cu) 0.20 mg,Seng (Zn) 1.6 mg,Retinol (Vit. A) 181 mcg,Thiamin (Vit. B1) 0.35 mg,Riboflavin (Vit. B2) 0.03 mg,Niasin (Niacin) 6.6 mg',
                'racun' => null,
                'url_gizi'=> 'https://cantik.tempo.co/read/1247668/bosan-menu-mpasi-ayam-atau-ikan-ganti-belut-yang-kaya-gizi/full&view=ok'
            ],
            [
                'ikan_id' => 's26',
                'gizi' => 'Calories 139(582 kJ),Saturated Fat 1.3g,Monounsaturated Fat 1.3g ,Polyunsaturated Fat 0.9g,Total Omega 3 fatty acids 534mg ,Total Omega 6 fatty acids 105mg,Protein 23.0g,Vitamin A 146IU,Vitamin C 1.4mg,Vitamin E (Alpha Tocopherol) 1.2mg,Vitamin K 0.1mcg,Thiamin 0.1mg,Riboflavin 0.1mg,Niacin 6.2mg,Vitamin B 60.5mg,Folate 10.7mcg,Vitamin B 120.3mcg,Pantothenic Acid 0.9mg,Choline 77.4mg,Calcium 48.8mg,Iron 1.2mg,Magnesium 34.5mg,Phosphorus 263mg,Potassium 425mg,Sodium 77.4mg,Zinc 0.6mg,Copper 0.1mg,Manganese 0.0mg,Selenium 43.4mcg,Cholesterol 58.3mg,Water 91.7g,Ash 1.4g',
                'racun' => null,
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-gurita/'
            ],
            [
                'ikan_id' => 's27',
                'gizi' => 'Air (Water) 80.1 g,Energi (Energy) 82 Kal,Protein (Protein) 18.0 g,Lemak (Fat) 1.0 g,Karbohidrat (CHO) 0.4 g,Abu (ASH) 0.5 g,Kalsium (Ca) 48 mg,Fosfor (P) 229 mg,Besi (Fe) 2.2 mg,Retinol (Vit. A) 4 mcg,Thiamin (Vit. B1) 0.04 mg',
                'racun' => null,
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-gurita/'
            ],
            [
                'ikan_id' => 's28',
                'gizi' => 'Air (Water) 80.0 g,Energi (Energy) 78 Kal,Protein (Protein) 14.5 g,Lemak (Fat) 0.6 g,Karbohidrat (CHO) 3.7 g,Abu (ASH) 1.2 g,Kalsium (Ca) 26 mg,Fosfor (P) 521 mg,Besi (Fe) 3.8 mg,Natrium (Na) 26 mg,Kalium (K) 692.0 mg,Tembaga (Cu) 4.70 mg,Seng (Zn) 4.1 mg,Retinol (Vit. A) 732 mcg,Thiamin (Vit. B1) 0.20 mg,Riboflavin (Vit. B2) 0.04 mg,Niasin (Niacin) 3.0 mg' ,
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's29',
                'gizi' => 'Calories 95.1(398 kJ),Saturated Fat 0.1g,Monounsaturated Fat 0.1g,Polyunsaturated Fat 0.3g,Total Omega 3 fatty acids 256mg ,Total Omega 6 fatty acids 7.0mg,Vitamin A 31.3IU,Vitamin C 3.4mg,Vitamin E (Alpha Tocopherol) 0.7mg,Vitamin K 0.1mcg,Niacin 2.4mg,Vitamin B6 0.5mg,Folate 8.1mcg,Vitamin B 121.0mcg,Pantothenic Acid 0.2mg,Choline 75.4mg,Calcium 8.1mg,Iron 0.3mg,Magnesium 27.8mg,Phosphorus 202mg,Potassium 468mg,Sodium 82.4mg,Selenium 42.3mcg,Cholesterol 42.9mg,Water 94.3g,Ash 1.4g' ,
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's30',
                'gizi' => 'Calories 215(900 kJ),Total Fat 12.1g,Saturated Fat 2.8g,Monounsaturated Fat 5.7g ,Polyunsaturated Fat 2.5g,Total Omega 3 fatty acids 732mg ,Total Omega 6 fatty acids 1393mg,Protein 24.7g,Vitamin A 79.5IU,Vitamin C 1.0mg,Vitamin E (Alpha Tocopherol) 1.9mg,Vitamin K 0.2mcg,Thiamin 0.6mg,Riboflavin 0.1mg,Niacin 3.7mg,Vitamin B 60.3mg,Folate 15.9mcg,Vitamin B 123.9mcg,Pantothenic Acid 1.0mg,Choline 103mg,Calcium 14.3mg,Iron 0.8mg,Magnesium 36.6mg,Phosphorus 321mg,Potassium 475mg,Sodium 84.3mg,Zinc 1.2mg,Copper 0.2mg,Selenium 20.0mcg,Cholesterol 74.7mg,Water 120g ,Ash 1.6g',
                'racun' => null,
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-tenggiri/'
            ],
            [
                'ikan_id' => 's31',
                'gizi' => 'Calories 281(1176 kJ),Saturated Fat 1.9g,Monounsaturated Fat 4.2g ,Polyunsaturated Fat 5.0g,Total Omega 3 fatty acids 3996mg ,Total Omega 6 fatty acids 341mg,Protein 39.3g,Vitamin A 79.2IU,Thiamin 0.4mg,Riboflavin 0.8mg,Niacin 15.6mg,Vitamin B 61.6mg,Folate 49.5mcg,Vitamin B 126.3mcg,Pantothenic Acid 3.3mg,Calcium 23.8mg,Iron 1.6mg,Magnesium 57.4mg,Phosphorus 396mg,Potassium 970mg,Sodium 87.1mg,Zinc 1.3mg,Copper 0.5mg,Selenium 72.3mcg,Cholesterol 109mg,Water 136g ,Ash 5.0g',
                'racun' => null,
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-tuna/'
            ],
            [
                'ikan_id' => 's32',
                'gizi' => 'Calories 354(1482 kJ),Saturated Fat 6.1 g,Monounsaturated Fat 8.7 g ,Polyunsaturated Fat 5.5 g,Total Omega 3 fatty acids 4637 mg ,Total Omega 6 fatty acids 242 mg,Protein 39.5g,Vitamin A 897IU18%,Vitamin C 7.9 mg,Vitamin E (Alpha Tocopherol) 2.4 mg,Thiamin 0.1 mg,Riboflavin 0.2 mg,Niacin 16.7 mg,Vitamin B 60.8 mg,Folate 59.4 mcg,Vitamin B 122.6 mcg,Pantothenic Acid 1.5 mg,Calcium 51.5 mg,Iron 0.5 mg,Magnesium 188 mg,Phosphorus 572 mg,Potassium 780 mg,Sodium 93.0 mg,Zinc 0.9 mg,Copper 0.1 mg,Selenium 72.3 mcg,Cholesterol 99.0mg,Water 142g,Ash 2.6g',
                'racun' => null,
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-cakalang/'
            ],
            [
                'ikan_id' => 's33',
                'gizi' => 'Calories238(996 kJ),Total Fat 7.5g,Saturated Fat 1.7g,Monounsaturated Fat 3.1g ,Polyunsaturated Fat 1.8g,Total Omega 3 fatty acids 1465mg ,Total Omega 6 fatty acids 119mg ,Protein 39.9g,Vitamin A 196IU,Vitamin E (Alpha Tocopherol) 2.2mg,Thiamin 0.2mg,Riboflavin 0.4mg,Niacin 13.9mg,Vitamin B 60.8mg,Folate 7.9mcg,Vitamin B 125.9mcg,Pantothenic Acid 1.5mg,Calcium 21.8mg,Iron 1.1mg,Magnesium 43.6mg,Phosphorus 560mg,Potassium 849mg,Sodium 99.0mg,Zinc 0.9mg,Copper 0.1mg,Selenium 72.3mcg,Cholesterol 146mg,Water 149g ,Ash 2.3g',
                'racun' => null,
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-lemadang/'
            ],
            [
                'ikan_id' => 's34',
                'gizi' => 'Calories47.5(199 kJ),Total Fat 2.4g,Total Omega 3 fatty acids 368mg ,Total Omega 6 fatty acids 107mg,Protein 6.0g,Vitamin A 54.5IU,Vitamin E (Alpha Tocopherol) 0.2m,Vitamin K 0.1mcg,Thiamin 0.1mg,Niacin 1.6mg,Vitamin B 60.1mg,Folate 1.1mcg,Vitamin B 121.4mcg,Pantothenic Acid 0.2mg,Choline 26.7mg,Calcium 1.7mg,Iron 0.1mg,Magnesium 6.8mg,Phosphorus 60.7mg,Potassium 110mg,Sodium 13.3mg,Zinc 0.2mg,Selenium 9.5mcg,Cholesterol 17.5mg,Water 19.8g,Ash 0.3g',
                'racun' => null,
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-bandeng/'
            ],
            [
                'ikan_id' => 's35',
                'gizi' => 'Calories 289(1210 kJ),Total Fat 11.7g,Total Omega 3 fatty acids 2918mg ,Total Omega 6 fatty acids 408mg,Protein 42.8g,Vitamin A 198IU,Vitamin C 2.0mg,Vitamin E (Alpha Tocopherol) 1.3mg,Vitamin K 0.2mcg,Thiamin 0.2mg,Riboflavin 0.3mg,Niacin 14.3mg,Vitamin B6 1.1mg,Folate 17.8mcg,Vitamin B 128.3mcg,Pantothenic Acid 1.6mg,Choline 187mg,Calcium 71.3mg,Iron 1.1mg,Magnesium 61.4mg,Phosphorus 519mg,Potassium 837mg,Sodium 91.1mg,Zinc 0.8mg,Copper 0.1mg,Selenium 72.3mcg,Cholesterol 89.1mg,Water 144g ,Ash 2.4g',
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's36',
                'gizi' => 'Calories 184(770 kJ),Total Fat 5.5g,Total Omega 3 fatty acids 1805mg,Total Omega 6 fatty acids 79.5mg,Protein 31.7g,Vitamin A 186IU,Vitamin E (Alpha Tocopherol) 1.0mg,Vitamin K 0.6mcg,Thiamin 0.3mg,Riboflavin 0.1mg,Niacin 11.1mg,Vitamin B 60.3mg,Folate 6.4mcg,Vitamin B 124.8mcg,Pantothenic Acid 1.2mg,Choline 150mg,Calcium 20.7mg,Iron 1.2mg,Magnesium 41.3mg,Phosphorus 366mg,Potassium 514mg,Sodium 9mg,Copper 0.1mg,Selenium 70.9mcg,Cholesterol 82.7mg,Water 121g,Ash 1.9g',
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's37',
                'gizi' => 'Calories 73 (306 kJ),Total Fat 0.8 g,Cholesterol 50 mg,Sodium 251 mg,Total Carbohydrate 0.6 g,Protein 14.8 g,Calcium 39 mg,Potassium 301 mg,Iron < 1 mg,Vitamin A 77 mg,Vitamin C 3 mg',
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's38',
                'gizi' => 'Calories 71 (298 kJ),Cholesterol 36 mg,Sodium 711 mg,Protein 15.5 g,Calcium 39 mg,Potassium 173 mg,Iron < 1 mg,Vitamin A 21 mg,Vitamin C 6 mg',
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's39',
                'gizi' => 'Calories 18 (76 kJ),Total Fat 0.2 g,Cholesterol 16 mg,Sodium 62 mg,Total Carbohydrate < 0.1 g,Protein 3.8 g,Calcium 19 mg,Potassium 69 mg,Iron < 1 mg,Vitamin C < 1 mg',
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's40',
                'gizi' => 'Air 68.1 g,Energi 151 Kal,Protein 13.8 g,Lemak 3.8 g,Karbohidrat 14.1 g,Abu 0.2 g,Kalsium 210 mg,Fosfor 250 mg,Besi 1.1 mg,Retinol 61 mcg,Thiamin 0.05 mg',
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's41',
                'gizi' => 'Calories 18 (76 kJ),Total Fat 0.2 g,Cholesterol 16 mg,Sodium 62 mg,Total Carbohydrate < 0.1 g,Protein 3.8 g,Calcium 19 mg,Potassium 69 mg,Iron < 1 mg,Vitamin C < 1 mg',
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's42',
                'gizi' => 'Calories 40 (169 kJ),Total Fat 1.2 g,Cholesterol 25 mg,Sodium 53 mg,Total Carbohydrate 2.5 g,Protein 4.7 g,Calcium 4 mg,Potassium 84 mg,Alcohol 0 g,Iron 3 mg,Vitamin A 135 mg,Vitamin C 4 mg',
                'racun' => null,
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's43',
                'gizi' => 'Calories 8 (35 kJ),Cholesterol 4 mg,Sodium 25 mg,Total Carbohydrate 0.8 g,Protein 0.7 g,Calcium 6 mg,Potassium 17 mg,Iron < 1 mg,Vitamin A 4 mg,Vitamin C < 1 mg',
                'racun' => null,
                'url_gizi'=> null
            ],
        ]);
    }
}
