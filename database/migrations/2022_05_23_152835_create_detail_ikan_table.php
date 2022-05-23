<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailIkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_ikan', function (Blueprint $table) {
            $table->string('ikan_id', 3);
            $table->foreign('ikan_id')->references('ikan_id')->on('ikan');
            $table->integer('tekstur_daging')->nullable();
            $table->integer('bau_amis')->nullable();
            $table->integer('berminyak')->nullable();
            $table->integer('duri')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_ikan');
    }
}
