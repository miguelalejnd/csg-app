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
        Schema::create('ServicioVendido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaccionId');
            $table->unsignedBigInteger('servicioId');
            $table->unsignedBigInteger('matriculaVehiculo');
            $table->decimal('descuento', $precision = 2, $scale = 2);
            $table->decimal('subtotal', $precision = 8, $scale = 2);
            
            $table->foreign('transaccionId')
                ->references('id')
                ->on('Transaccion')
                ->onDelete('cascade');
            $table->foreign('servicioId')
                ->references('id')
                ->on('Servicio');
            $table->foreign('matriculaVehiculo')
                ->references('matricula')
                ->on('Vehiculo')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ServicioVendido');
    }
};
