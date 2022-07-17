<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiriracunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciriracun', function (Blueprint $table) {
            $table->string('racun_id')->primary();
            $table->foreign('racun_id')->references('racun_id')->on('racun')->onDelete('cascade');
            $table->string('ciriracun');
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
        Schema::dropIfExists('ciriracun');
    }
}
