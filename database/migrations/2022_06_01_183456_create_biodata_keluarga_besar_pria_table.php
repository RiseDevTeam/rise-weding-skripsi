<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataKeluargaBesarPriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_keluarga_besar_pria', function (Blueprint $table) {
            $table->bigIncrements('id_keluarga_besar_pria');
            $table->string('mengundang_pria');
            $table->string('nama_keluarga_pria');
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
        Schema::dropIfExists('biodata_keluarga_besar_pria');
    }
}
