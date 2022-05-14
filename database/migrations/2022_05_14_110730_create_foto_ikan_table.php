<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoIkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_ikan', function (Blueprint $table) {
            $table->string('ikan_id')->primary();
            $table->foreign('ikan_id')->references('ikan_id')->on('ikan');
            $table->string('url_gambar', 177)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto_ikan');
    }
}
