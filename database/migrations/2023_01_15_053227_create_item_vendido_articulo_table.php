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
        Schema::create('ItemVendidoArticulo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ventaId');
            $table->unsignedBigInteger('articuloId');
            $table->integer('cantidad');
            $table->decimal('descuento', $precision = 2, $scale = 2);
            $table->decimal('subtotal', $precision = 8, $scale = 2);
            
            $table->foreign('ventaId')
                ->references('id')
                ->on('Venta');
            $table->foreign('articuloId')
                ->references('codigo')
                ->on('Articulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ItemVendidoArticulo');
    }
};
