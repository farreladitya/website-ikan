<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaIkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_ikan', function (Blueprint $table) {
            $table->string('ikan_id',3)->primary();
            $table->foreign('ikan_id')->references('ikan_id')->on('ikan')->onDelete('cascade');
            $table->integer('harga')->nullable();
            $table->string('url_harga', 230)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harga_ikan');
    }
}
