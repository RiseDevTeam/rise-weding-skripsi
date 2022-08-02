<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateInvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_invitation', function (Blueprint $table) {
            $table->bigIncrements('id_template');
            $table->bigInteger('id_kategori');
            $table->bigInteger('id_user');
            $table->string('link_hosting');
            $table->string('file_master');
            $table->string('gambar_cover')->nullable();
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
        Schema::dropIfExists('template_invitation');
    }
}
