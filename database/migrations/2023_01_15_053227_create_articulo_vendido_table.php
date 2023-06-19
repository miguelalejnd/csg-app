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
        Schema::create('articulo_vendido', function (Blueprint $table) {
            $table->unsignedBigInteger('transaccion_id');
            $table->unsignedBigInteger('articulo_id');
            $table->integer('cantidad');
            $table->decimal('descuento', $precision = 2, $scale = 2);
            $table->decimal('subtotal', $precision = 8, $scale = 2);

            $table->primary(['transaccion_id', 'articulo_id']);

            $table->foreign('transaccion_id')
                ->references('transaccion_id')
                ->on('transaccion')
                ->onDelete('cascade');

            $table->foreign('articulo_id')
                ->references('articulo_id')
                ->on('articulo')
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
        Schema::dropIfExists('articulo_vendido');
    }
};
