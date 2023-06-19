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
        Schema::create('articulo_inventario', function (Blueprint $table) {
            $table->unsignedBigInteger('inventario_id');
            $table->unsignedBigInteger('articulo_id');
            $table->integer('entradas');
            $table->integer('salidas');
            $table->integer('existencias');
            $table->timestamps();

            $table->primary(['inventario_id', 'articulo_id']);
            
            $table->foreign('inventario_id')
                ->references('inventario_id')
                ->on('inventario')
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
        Schema::dropIfExists('articulo_inventario');
    }
};
