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
        Schema::create('visita', function (Blueprint $table) {
            $table->id('visita_id');
            $table->unsignedBigInteger('transaccion_id');
            $table->unsignedBigInteger('vehiculo_id');
            $table->date('fecha_ingreso');
            $table->date('fecha_salida');
            $table->string('motivo', 200);
            $table->timestamps();

            $table->foreign('transaccion_id')
                ->references('transaccion_id')
                ->on('transaccion')
                ->onDelete('cascade');

            $table->foreign('vehiculo_id')
                ->references('vehiculo_id')
                ->on('vehiculo')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visita');
    }
};
