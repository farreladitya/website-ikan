<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlatTangkapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alat_tangkap', function (Blueprint $table) {
            $table->char("ikan_id", 3);
            $table->char("nama_biasa", 29);
            $table->char("Alat_tangkap", 43);
            $table->char("Url", 141);
            $table->char("Column_5", 6);
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
        Schema::dropIfExists('alat_tangkap');
    }
}
