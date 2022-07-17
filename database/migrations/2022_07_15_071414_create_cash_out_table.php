<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_out', function (Blueprint $table) {
            $table->bigIncrements('id_cash_out');
            $table->bigInteger('id_pembayaran');
            $table->bigInteger('id_user');
            $table->bigInteger('total');
            $table->date('tanggal_cashout');
            $table->string('status');
            $table->string('bukti_cashout')->default('pending');
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
        Schema::dropIfExists('cash_out');
    }
}
