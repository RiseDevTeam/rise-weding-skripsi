<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataJadwalResepsi2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_jadwal_resepsi_2', function (Blueprint $table) {
            $table->bigIncrements('id_jadwal_resepsi_2')->nullable();
            $table->string('jam_mulai_resepsi_2')->nullable();
            $table->date('tanggal_resepsi_2')->nullable();
            $table->string('waktu_wilayah_resepsi_2')->nullable();
            $table->string('lokasi_resepsi_2')->nullable();
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
        Schema::dropIfExists('biodata_jadwal_resepsi_2');
    }
}
