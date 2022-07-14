<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataGaleriFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_galeri_foto', function (Blueprint $table) {
            $table->bigIncrements('id_galeri_foto');
            $table->string('galeri_foto1')->nullable();
            $table->string('galeri_foto2')->nullable();
            $table->string('galeri_foto3')->nullable();
            $table->string('galeri_foto4')->nullable();
            $table->string('galeri_foto5')->nullable();
            $table->string('galeri_foto6')->nullable();
            $table->string('galeri_foto7')->nullable();
            $table->string('galeri_foto8')->nullable();
            $table->string('galeri_foto9')->nullable();
            $table->string('galeri_foto10')->nullable();
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
        Schema::dropIfExists('biodata_galeri_foto');
    }
}
