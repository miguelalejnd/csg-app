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
        Schema::create('ItemVendidoServicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ventaId');
            $table->unsignedBigInteger('servicioId');
            $table->unsignedBigInteger('vehiculoId');
            $table->decimal('descuento', $precision = 2, $scale = 2);
            $table->decimal('subtotal', $precision = 8, $scale = 2);
            
            $table->foreign('ventaId')
                ->references('id')
                ->on('Venta')
                ->onDelete('cascade');
            $table->foreign('servicioId')
                ->references('id')
                ->on('Servicio');
            $table->foreign('vehiculoId')
                ->references('id')
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
        Schema::dropIfExists('ItemVendidoServicio');
    }
};
