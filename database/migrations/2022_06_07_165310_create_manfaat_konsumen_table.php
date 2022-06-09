<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManfaatKonsumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manfaat_konsumen', function (Blueprint $table) {
            $table->string('manfaat_id');
            $table->string('konsumen_id');
            $table->foreign('manfaat_id')->references('manfaat_id')->on('manfaat')->onDelete('cascade');
            $table->foreign('konsumen_id')->references('konsumen_id')->on('konsumen')->onDelete('cascade');
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
        Schema::dropIfExists('manfaat_konsumen');
    }
}
