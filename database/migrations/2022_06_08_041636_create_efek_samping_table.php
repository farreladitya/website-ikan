<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEfekSampingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efek_samping', function (Blueprint $table) {
            $table->string('efek_samping_id')->primary();
            $table->string('efek_samping');
            $table->string('nama_ikan')->nullable();
            $table->string('ktrt_racun')->nullable();
            $table->string('url_efek_samping', 600);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('efek_samping');
    }
}
