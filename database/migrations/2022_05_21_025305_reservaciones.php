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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_ll');
            $table->date('fecha_sa');
            $table->unsignedBigInteger('hab_id');
            $table->unsignedBigInteger('huesped_id');
            $table->integer('noches');
            $table->float('total');
            $table->float('abono');
            $table->foreign('hab_id')
                    ->references('id')->on('habitaciones')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('huesped_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
};
