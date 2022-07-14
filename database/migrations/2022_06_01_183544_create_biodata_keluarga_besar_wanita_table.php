<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataKeluargaBesarWanitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_keluarga_besar_wanita', function (Blueprint $table) {
            $table->bigIncrements('id_keluarga_besar_wanita');
            $table->string('mengundang_wanita');
            $table->string('nama_keluarga_wanita');
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
        Schema::dropIfExists('biodata_keluarga_besar_wanita');
    }
}
