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
                'gizi' => 'Energi 82 kkal,Protein 18 gram,Lemak 1 gram,Karbo 0.40 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/898/nilai-kandungan-gizi-ikan-layur-segar'
            ],
            [
                'ikan_id' => 's02',
                'gizi' => 'Protein 21.3 gram,Lemak 3.4 gram,Karbohidrat 2.2 gram,Kalsium 136 mg,Fosfor 69 mg,Besi 0.8 mg,Natrium 214 mg,Kalium 245 mg,Tembaga 0.20 mg,Seng 1.1 mg,VitaminB1 0.26 mg,VitaminB2 0.03 mg,VitaminB3 0.2 mg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-kembung/'
            ],
            [
                'ikan_id' => 's03',
                'gizi' => 'Energi 87 kkal,Protein 16 gram,Lemak 2.2 gram,Karbo 1 gram,Air 79.9 g,Karbohidrat 1.0 g,Abu 0.9 g,Kalsium 75 mg,Fosfor 136 mg,Besi 1.0 mg,Retinol 6 mcg,Thiamin 0.04 mg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/935/nilai-kandungan-gizi-kuro-segar,https://www.panganku.org/id-ID/view'
            ],
            [
                'ikan_id' => 's04',
                'gizi' => null,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's05',
                'gizi' => null,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's06',
                'gizi' => null,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> null
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
                'gizi' => 'Energi 92 kkal,Protein 20 gram,Lemak 0.70 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/888/nilai-kandungan-gizi-ikan-kakap-segar'
            ],
            [
                'ikan_id' => 's13',
                'gizi' => 'Kalori 230 kkal,Protein 48 gram,Selenium 91.25 mikrogram,Omega3 0.65 gram,Fosfor 405 miligram,VitaminB6 0.75 miligram,VitaminB5 1.875 miligram,VitaminB12 1.5 mikrogram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://www.sehatq.com/artikel/berbagai-manfaat-ikan-kerapu-yang-digemari-di-indonesia'
            ],
            [
                'ikan_id' => 's14',
                'gizi' => 'Kalori 230 kkal,Protein 48 gram,Selenium 91.25 mikrogram,Omega3 0.65 gram,Fosfor 405 miligram,VitaminB6 0.75 miligram,VitaminB5 1.875 miligram,VitaminB12 1.5 mikrogram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://www.sehatq.com/artikel/berbagai-manfaat-ikan-kerapu-yang-digemari-di-indonesia'
            ],
            [
                'ikan_id' => 's15',
                'gizi' => 'Kalori 230 kkal,Protein 48 gram,Selenium 91.25 mikrogram,Omega3 0.65 gram,Fosfor 405 miligram,VitaminB6 0.75 miligram,VitaminB5 1.875 miligram,VitaminB12 1.5 mikrogram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://www.sehatq.com/artikel/berbagai-manfaat-ikan-kerapu-yang-digemari-di-indonesia'
            ],
            [
                'ikan_id' => 's16',
                'gizi' => 'Kalori 91 kkal,Protein 19 gram,Lemak 1.7 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/870/nilai-kandungan-gizi-ikan-bawal-segar'
            ],
            [
                'ikan_id' => 's17',
                'gizi' => 'Kalori 91 kkal,Protein 19 gram,Lemak 1.7 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://nilaigizi.com/gizi/detailproduk/870/nilai-kandungan-gizi-ikan-bawal-segar'
            ],
            [
                'ikan_id' => 's18',
                'gizi' => 'Kalori 77 kkal,Lemak 1 miligram,Natrium 58 miligram,Protein 16 gram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://www.sehatq.com/artikel/segudang-manfaat-ikan-halibut-bagi-kesehatan'
            ],
            [
                'ikan_id' => 's19',
                'gizi' => null,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's20',
                'gizi' => null,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's21',
                'gizi' => null,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's22',
                'gizi' => 'Kalori 193 kkal,Protein 42 gram,Lemak 1.5 gram,Kalsium 200 mg,Fosfor 300 mg,ZatBesi 3 mg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://www.bukalapak.com/p/food/makanan/1in5qak-jual-ikan-kapasan-tawar-ikan-kapas-kapas-tawar-ikan-kapas-kapas'
            ],
            [
                'ikan_id' => 's23',
                'gizi' => 'Kkalori 303 kkal,Protein 18.4 gram,Lemak 27 gram,Kalsium 20 miligram,Fosfor 200 miligram,ZatBesi 20 miligram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://cantik.tempo.co/read/1247668/bosan-menu-mpasi-ayam-atau-ikan-ganti-belut-yang-kaya-gizi/full&view=ok'
            ],
            [
                'ikan_id' => 's24',
                'gizi' => 'Energi 168 kkal,Protein 38.2 gram,Lemak 0.6 gram,Karbohidrat 0.2 gram,VitaminA 4 mikrogram,VitaminB1 0.1 miligram,VitaminB2 0.24 miligram,VitaminB3 5 miligram,VitaminB6 0.5 miligram,VitaminB12 7.4 mikrogram,VitaminD 6 mikrogram,Natrium 540 miligram,Kalium 220 miligram,Kalsium 8 miligram,Magnesium 36 miligram,Fosfor 340 miligram,ZatBesi 1.8 miligram,Zinc 1 miligram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-pari/'
            ],
            [
                'ikan_id' => 's25',
                'gizi' => 'Kalori 82 kkal,Protein 14.91 gram,Lemak 1.04 gram,Karbohidrat 2.2 gram,Kalsium 53 miligram,Fosfor 186 milligram,ZatBesi 5.3 miligram,Natrium 230 miligram,Kalium 350 miligram,Tembaga 0.435 miligram,Magnesium 30 miligram,Seng 1.68 miligram,VitaminA 45 mikrogram,VitaminB1 0.03 miligram,VitaminB2 0.04 miligram,VitaminB3 2.1 miligram,VitaminC 5 miligram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-gurita/'
            ],
            [
                'ikan_id' => 's26',
                'gizi' => 'Kalori 82 kkal,Protein 14.91 gram,Lemak 1.04 gram,Karbohidrat 2.2 gram,Kalsium 53 miligram,Fosfor 186 milligram,ZatBesi 5.3 miligram,Natrium 230 miligram,Kalium 350 miligram,Tembaga 0.435 miligram,Magnesium 30 miligram,Seng 1.68 miligram,VitaminA 45 mikrogram,VitaminB1 0.03 miligram,VitaminB2 0.04 miligram,VitaminB3 2.1 miligram,VitaminC 5 miligram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-gurita/'
            ],
            [
                'ikan_id' => 's27',
                'gizi' => 'Kalori 75 kkal,Air 82.2 gram,Protein 16.1 gram,Kalsium 32 mg,Natrium 37 mg,Fosfor 200 mg,Kalium 204.1 mg,BetaKaroten 20 mcg,VitaminB12 1.3 mcg,VitaminE 1.2 mcg' ,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/bahaya-manfaat-cumi-cumi/'
            ],
            [
                'ikan_id' => 's28',
                'gizi' => null ,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's29',
                'gizi' => null ,
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> null
            ],
            [
                'ikan_id' => 's30',
                'gizi' => 'Energi 139 kkal,Protein 19.29 gram,Lemak 6.3 gram,Kalsium 11 mg,ZatBesi 0.44 mg,Magnesium 33 mg,Fosfor 205 mg,Kalium 446 mg,Natrium 59 mg,Seng 0.49 mg,Tembaga 0.055 mg,Mangan 0.014 mg,Selenium 36.5 mcg,VitaminC 1.6 mg,VitaminB1 0.13 mg,VitaminB2 0.17 mg,Niasin 2.3 mg,AsamPantotenat 0.75 mg,VitaminB6 0.4 mg,Folat 1 mcg,Kolin 50.5 mg,VitaminB12 2.4 mcg,VitaminA 39 mcg,AsamLemak 1.828 gram,VitaminE 0.69 mg,VitaminK 0.1 mcg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-tenggiri/'
            ],
            [
                'ikan_id' => 's31',
                'gizi' => 'Energi 109 kkal,Protein 24.4 gram,Lemak 0.5 gram,VitaminB1 0.12 miligram,VitaminB2 0.12 miligram,VitaminB3 18.5 miligram,VitaminB5 0.28 miligram,VitaminB6 0.93 miligram,Kalsium 4 miligram,ZatBesi 0.77 miligram,Magnesium 35 miligram,Fosfor 278 miligram,Kalium 441 miligram,Natrium 45 miligram,Zinc 0.37 miligram',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-tuna/'
            ],
            [
                'ikan_id' => 's32',
                'gizi' => 'Energi 204 kal,Protein 34.2 g,Karbohidrat 1.9 gram,Lemak 5.6 gram,Natrium 176 mg,VitaminA 1.546 mcg,Fosfor 399 mg,VitaminB1 0.53 mg,Kalium 588 mg,VitaminB2 0.07 mg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-cakalang/'
            ],
            [
                'ikan_id' => 's33',
                'gizi' => 'Energi 82 Kal,Protein 3.53 gram,Lemak 0.59 gram,Kalsium  12 mg,ZatBesi 1.27 mg,Kalium 329 mg,Natrium 88 mg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-lemadang/'
            ],
            [
                'ikan_id' => 's34',
                'gizi' => 'Protein 20 gram,Lemak 4.8 gram,Kalsium 20 mg,Fosfor 150 mg,ZatBesi 2 mg,Natrium 67 mg,Zinc 0.9 mg,Kalium 271.1 mg,VitaminA45 mcg,VitaminB1 0.05 mg,VitaminB2 0.10 mg,VitaminB3 6 mg',
                'racun' => 'Timbal,Merkuri,Kadmium,Anisakis Simplex,Cestodes,Vibrio,Salmonella,Shigella,Clostridium Botulinum,Staphylococcus,Aureus,Clostridium Perfringens,Bacillus Cereus,Kandungan Mikroplastik,Methyl Mercury,Vibrio Vulnificus',
                'url_gizi'=> 'https://hellosehat.com/nutrisi/fakta-gizi/manfaat-ikan-bandeng/'
            ],
        ]);
    }
}
