<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transisis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ind');
            $table->foreign('id_ind')->references('id')->on('bahasa_indonesias')->onDelete('restrict');
            $table->unsignedBigInteger('id_os');
            $table->foreign('id_os')->references('id')->on('bahasa_osings')->onDelete('restrict');
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
        Schema::dropIfExists('transisis');
    }
};
