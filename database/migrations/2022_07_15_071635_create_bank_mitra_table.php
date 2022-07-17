<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_mitra', function (Blueprint $table) {
            $table->bigIncrements('id_bank');
            $table->bigInteger('id_user');
            $table->string('nama_bank');
            $table->string('atas_nama');
            $table->text('nomor_rekening');
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
        Schema::dropIfExists('bank_mitra');
    }
}
