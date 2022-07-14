<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembayaranInvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembayaran_invitation', function (Blueprint $table) {
            $table->bigIncrements('id_detail_pembayaran');
            $table->bigInteger('id_pembayaran');
            $table->string('tipe_pembayaran');
            $table->string('kode_transaksi');
            $table->bigInteger('total');
            $table->string('bukti_pembayaran');
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
        Schema::dropIfExists('detail_pembayaran_invitation');
    }
}
