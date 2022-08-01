<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outlet')->insert([
            'id_outlet' => 'o1',
            'foto_outlet' => '',
            'nama_outlet' => 'Freezy Fresh',
            'persebaran' => 'Banten',
            'nama_ikan' => 'layur',
            'url' => 'https://www.freezyfresh.com/',
            'lokasi' => 'Ruko Pluit Timur, Jalan Pluit Timur Blok L.Timur No: 18, Jakarta Utara, DKI Jakarta',
            'kategori' => 'online',
            'harga' => '12000',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o2',
            'foto_outlet' => '',
            'nama_outlet' => 'PT. Bahari Biru Nusantara',
            'persebaran' => 'Tuban',
            'nama_ikan' => 'layur',
            'url' => 'https://www.baruna.net/',
            'kategori' => 'online',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o3',
            'foto_outlet' => '',
            'nama_outlet' => 'Toko Hayati Fresh & Frozen Seafood Supplier',
            'persebaran' => 'Laut Jawa,Selat Sunda',
            'nama_ikan' => 'Ikan Dori,Cumi Bangka,Cumi Sero,Ikan Kakap Merah,Udang Rebon,Udang Jerbung,Udang Peci,Udang Pancet,Udang Vaname,Udang Galah',
            'url' => 'https://www.indotrading.com/hayatifreshfrozenseafoodsupplier',
            'kategori' => 'offline',
            'lokasi' => 'Ruko Pluit Timur, Jalan Pluit Timur Blok L.Timur No: 18, Jakarta Utara, DKI Jakarta',
            'harga' => '75000',
        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o4',
            'foto_outlet' => '',
            'nama_outlet' => 'Vanda Seafood',
            'persebaran' => 'Laut Jawa,Selat Sunda',
            'nama_ikan' => 'Ikan Dori,Cumi Bangka,Cumi Sero',
            'url' => 'https://www.indotrading.com/vandaseafood',
            'kategori' => 'offline',
            'lokasi' => 'Jl. Jelambar Madya Barat 9 Kavling Polri Blok A 15 No 356 Jelambar, Grogol, DKI Jakarta',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o5',
            'foto_outlet' => '',
            'nama_outlet' => 'Samudera Salmon Semesta',
            'persebaran' => '',
            'nama_ikan' => 'Ikan Dori',
            'url' => 'https://www.indotrading.com/samuderasalmonsemesta',
            'kategori' => 'offline',
            'lokasi' => 'Pelabuhan Nizam Zachman Dermaga Timur Transit No 3 Muara Baru, Jakarta Utara, DKI Jakarta',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o8',
            'foto_outlet' => '',
            'nama_outlet' => 'Mamora Seafood',
            'persebaran' => 'Pantai Utara Jawa',
            'nama_ikan' => 'Ikan Kakap Merah,Ikan Kakap Domba,Ikan Kakap Batu,Ikan Kakap Sirip Kuning,Ikan Kakap Putih',
            'url' => 'https://www.tokopedia.com/mamorasupplier',
            'kategori' => 'online',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o9',
            'foto_outlet' => '',
            'nama_outlet' => 'Erinda Seafood Supplier',
            'persebaran' => 'Laut Jawa,Selat Sunda',
            'nama_ikan' => 'Ikan Kakap Merah,Ikan Kakap Domba,Ikan Kakap Batu,Ikan Kakap Sirip Kuning,Ikan Kakap Putih,Cumi Bangka,Cumi Sero',
            'url' => 'https://www.supplierikan.com/',
            'kategori' => 'offline',
            'lokasi' => 'Jalan Masjid Darul Fallah No. 61, Jakarta Selatan',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o10',
            'foto_outlet' => '',
            'nama_outlet' => 'Hippo Mart',
            'persebaran' => 'Utara Jawa',
            'nama_ikan' => 'Ikan Kakap Merah,Ikan Kakap Domba,Ikan Kakap Batu,Ikan Kakap Sirip Kuning,Ikan Kakap Putih',
            'url' => 'https://www.tokopedia.com/hippomarts',
            'kategori' => 'online',
            'lokasi' => 'Jalan Masjid Darul Fallah No. 61, Jakarta Selatan',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o11',
            'foto_outlet' => '',
            'nama_outlet' => 'Pasar Ikan Pabean',
            'persebaran' => 'Utara Jawa',
            'nama_ikan' => 'Ikan Kerapu Bebek,Ikan Kerapu Macan,Ikan Kerapu Lumpur,Ikan Kerapu Sunu',
            'url' => 'https://pasarsurya.surabaya.go.id/index.php/pasar-pabean/',
            'kategori' => 'offline',
            'lokasi' => 'Jl. Panggung, Nyamplungan, Kec. Pabean Cantikan, Kota SBY, Jawa Timur 60162',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o13',
            'foto_outlet' => '',
            'nama_outlet' => 'Pasar Ikan Modern Muara Baru',
            'persebaran' => 'Lampung,Banten,Jawa Barat,Jawa Tengah,Jawa Timur',
            'nama_ikan' => 'Tongkol,Cumi Bangka,Cumi Sero,Ikan Kakap Merah,Udang Rebon,Udang Jerbung,Udang Peci,Udang Pancet,Udang Vaname,Udang Galah',
            'url' => 'https://g.page/pasarikanmodernhdm?share',
            'kategori' => 'offline',
            'lokasi' => '7, Jl. Muara Baru Ujung Gedung Pompa No.21, RT.21/RW.17, Penjaringan, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14440',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o14',
            'foto_outlet' => '',
            'nama_outlet' => 'Pasar Ikan Balekambang',
            'persebaran' => '',
            'nama_ikan' => 'Tongkol,Cumi Bangka,Cumi Sero,Udang Rebon,Udang Jerbung,Udang Peci,Udang Pancet,Udang Vaname,Udang Galah',
            'url' => 'https://pasar-ikan-segar-balekambang.business.site/?utm_source=gmb&utm_medium=referral',
            'kategori' => 'offline',
            'lokasi' => 'Jl. Balekambang No.7, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o16',
            'foto_outlet' => '',
            'nama_outlet' => 'Grosir Ikan GRM Anak Pantai',
            'persebaran' => '',
            'nama_ikan' => 'Udang Rebon,Udang Jerbung,Udang Peci,Udang Pancet,Udang Vaname,Udang Galah,Kepiting Bakau,Cumi Bangka,Cumi Sero,Lobster',
            'kategori' => 'offline',
            'lokasi' => 'Jl. Adi Sumarmo, Gedongan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57173',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o21',
            'foto_outlet' => '',
            'nama_outlet' => 'Pelelangan ikan Pelabuhan Perikanan Pantai Tegalsari Tegal',
            'persebaran' => 'Tegal',
            'nama_ikan' => 'Cumi Bangka,Cumi Sero,Tongkol',
            'kategori' => 'offline',
            'lokasi' => '542H+5FP, Tegalsari, Kec. Tegal Bar., Kota Tegal, Jawa Tengah 52111',

        ]);
        DB::table('outlet')->insert([
            'id_outlet' => 'o22',
            'foto_outlet' => '',
            'nama_outlet' => 'Pasar Ikan Cinde',
            'persebaran' => 'Tegal',
            'nama_ikan' => 'Tongkol,Teri,Baronang,Belanak,Ikan Kakap Merah,Ikan Kakap Domba,Ikan Kakap Batu,Ikan Kakap Sirip Kuning,Ikan Kakap Putih',
            'kategori' => 'offline',
            'lokasi' => 'Jalan Sawo, Tegal, Tegal, Jawa Tengah, Indonesia',

        ]);
    }
}
