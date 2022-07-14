<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_template', function (Blueprint $table) {
            $table->bigIncrements('id_file_template');
            $table->bigInteger('id_template');
            $table->bigInteger('id_sub_kategori');
            $table->string('file');
            $table->string('gambar_template');
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
        Schema::dropIfExists('file_template');
    }
}
