<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataPelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_pelanggan', function (Blueprint $table) {
            $table->bigIncrements('id_biodata_pelanggan');
            $table->bigInteger('id_user');
            $table->bigInteger('id_biodata_home_page');
            $table->bigInteger('id_kutipan_ayat');
            $table->bigInteger('id_pasangan_pria');
            $table->bigInteger('id_pasangan_wanita');
            $table->bigInteger('id_galeri_foto');
            $table->bigInteger('id_jadwal_akad')->nullable();
            $table->bigInteger('id_jadwal_resepsi')->nullable();
            $table->bigInteger('id_jadwal_resepsi_2')->nullable();
            $table->bigInteger('id_keluarga_besar_pria')->nullable();
            $table->bigInteger('id_keluarga_besar_wanita')->nullable();
            $table->bigInteger('id_musik')->nullable();
            $table->bigInteger('nomor_telepon');
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
        Schema::dropIfExists('biodata_pelanggan');
    }
}
