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
        Schema::create('check_ins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('huesped_id');
            $table->unsignedBigInteger('habitacion_id');
            $table->unsignedBigInteger('recepcionista_id');
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->foreign('huesped_id')->references('id')->on('reservaciones')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('habitacion_id')->references('id')->on('reservaciones')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('recepcionista_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_ins');
    }
};
