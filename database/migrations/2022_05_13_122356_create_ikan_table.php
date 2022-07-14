<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikan', function (Blueprint $table) {
            $table->string('ikan_id', 3)->primary();
            $table->string('jenis_ikan', 10);
            $table->string('nama_ikan', 50);
            $table->integer('berat_minimal');
            $table->integer('berat_maksimal');
            $table->string('habitat');
            $table->string('kategori_ikan', 35);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ikan');
    }
}
