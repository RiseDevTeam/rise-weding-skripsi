<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataJadwalResepsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_jadwal_resepsi', function (Blueprint $table) {
            $table->bigIncrements('id_jadwal_resepsi');
            $table->string('jam_mulai_resepsi');
            $table->date('tanggal_resepsi');
            $table->string('waktu_wilayah_resepsi');
            $table->string('lokasi_resepsi');
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
        Schema::dropIfExists('biodata_jadwal_resepsi');
    }
}
