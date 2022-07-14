<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPemesananInvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanan_invitation', function (Blueprint $table) {
            $table->bigIncrements('id_detail_pemesanan');
            $table->bigInteger('id_pemesanan');
            $table->bigInteger('id_template')->nullable();
            $table->bigInteger('id_video')->nullable();
            $table->string('file_template')->nullable();
            $table->string('file_vidio')->nullable();
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
        Schema::dropIfExists('detail_pemesanan_invitation');
    }
}
