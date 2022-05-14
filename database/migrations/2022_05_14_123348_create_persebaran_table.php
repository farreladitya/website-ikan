<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersebaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persebaran', function (Blueprint $table) {
            $table->id();
            $table->string('ikan_id', 3);
            $table->foreign('ikan_id')->references('ikan_id')->on('ikan');
            $table->string('persebaran', 127)->nullable();
            $table->text('url', 101)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persebaran');
    }
}
