<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra', function (Blueprint $table) {
            $table->bigIncrements('id_mitra');
            $table->bigInteger('id_user');
            $table->string('nomor_ktp');
            $table->bigInteger('nomor_telepon');
            $table->string('foto_ktp');
            $table->text('alamat');
            $table->string('status_mitra');
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
        Schema::dropIfExists('mitra');
    }
}
