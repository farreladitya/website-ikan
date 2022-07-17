<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsgiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipsgizi', function (Blueprint $table) {
            $table->string('gizi_id')->primary();
            $table->foreign('gizi_id')->references('gizi_id')->on('list_gizi')->onDelete('cascade');
            $table->string('tipsgizi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipsgizi');
    }
}
