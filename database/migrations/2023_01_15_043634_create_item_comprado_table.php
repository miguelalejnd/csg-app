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
        Schema::create('ItemComprado', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compraId');
            $table->unsignedBigInteger('articuloId');
            $table->integer('cantidad');
            $table->decimal('costo', $precision = 8, $scale = 2);
            $table->decimal('subtotal', $precision = 8, $scale = 2);
            
            $table->foreign('compraId')
                ->references('id')
                ->on('Compra')
                ->onDelete('cascade');
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
        Schema::dropIfExists('ItemComprado');
    }
};
