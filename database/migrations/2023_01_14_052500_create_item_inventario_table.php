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
        Schema::create('ItemInventario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventarioId');
            $table->unsignedBigInteger('articuloId');
            $table->integer('entradas');
            $table->integer('salidas');
            $table->integer('existencias');
            
            $table->foreign('inventarioId')
                ->references('id')
                ->on('Inventario');
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
        Schema::dropIfExists('ItemInventario');
    }
};
