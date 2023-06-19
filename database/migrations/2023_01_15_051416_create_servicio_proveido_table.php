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
        Schema::create('servicio_proveido', function (Blueprint $table) {
            $table->unsignedBigInteger('transaccion_id');
            $table->unsignedBigInteger('servicio_id');
            $table->decimal('descuento', $precision = 2, $scale = 2);
            $table->decimal('subtotal', $precision = 8, $scale = 2);
            $table->timestamps();

            $table->primary(['transaccion_id', 'servicio_id']);

            $table->foreign('transaccion_id')
                ->references('transaccion_id')
                ->on('transaccion')
                ->onDelete('cascade');

            $table->foreign('servicio_id')
                ->references('servicio_id')
                ->on('servicio')
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
        Schema::dropIfExists('servicio_proveido');
    }
};
