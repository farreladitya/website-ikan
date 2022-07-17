<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutletTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outlet', function (Blueprint $table) {
            $table->string('id_outlet', 3)->primary();
            $table->string('foto_outlet')->nullable();
            $table->string('nama_outlet')->nullable();;
            $table->string('persebaran')->nullable();;
            $table->string('nama_ikan')->nullable();;
            $table->string('url')->nullable();;
            $table->string('lokasi')->nullable();;
            $table->string('kategori')->nullable();;
            $table->integer('harga')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outlet_tables');
    }
}
