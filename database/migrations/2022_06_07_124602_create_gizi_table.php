<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gizi', function (Blueprint $table) {
            $table->id();
            $table->string('ikan_id');
            $table->foreign('ikan_id')->references('ikan_id')->on('ikan')->onDelete('cascade');
            $table->string('gizi', 700)->nullable();
            $table->string('racun', 700)->nullable();
            $table->string('url_gizi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gizi');
    }
}
