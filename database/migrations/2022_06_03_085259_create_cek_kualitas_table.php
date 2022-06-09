<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCekKualitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cek_kualitas', function (Blueprint $table) {
            $table->string('ikan_id');
            $table->foreign('ikan_id')->references('ikan_id')->on('ikan')->onDelete('cascade');
            $table->string('url_video');
            $table->string('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cek_kualitas');
    }
}
