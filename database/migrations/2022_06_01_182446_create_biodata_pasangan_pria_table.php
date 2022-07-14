<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataPasanganPriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_pasangan_pria', function (Blueprint $table) {
            $table->bigIncrements('id_pasangan_pria');
            $table->string('nama_lengkap');
            $table->string('putra_dari');
            $table->string('gambar_mempelai_pria');
            $table->string('nama_bapak_pria');
            $table->string('nama_ibu_pria');
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
        Schema::dropIfExists('biodata_pasangan_pria');
    }
}
