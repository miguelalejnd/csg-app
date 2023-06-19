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
        Schema::create('ArticuloVendido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaccionId');
            $table->unsignedBigInteger('codigoArticulo');
            $table->integer('cantidad');
            $table->decimal('descuento', $precision = 2, $scale = 2);
            $table->decimal('subtotal', $precision = 8, $scale = 2);
            
            $table->foreign('transaccionId')
                ->references('id')
                ->on('Transaccion');
            $table->foreign('codigoArticulo')
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
        Schema::dropIfExists('ArticuloVendido');
    }
};
