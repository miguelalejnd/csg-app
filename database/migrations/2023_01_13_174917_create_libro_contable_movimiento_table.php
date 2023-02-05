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
        Schema::create('LibroContableMovimiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libroContableId');
            $table->unsignedBigInteger('libroDiarioMovimientoId');
            $table->date('fecha');
            $table->char('tipoMovimeinto', 1);
            $table->decimal('monto', $precision = 8, $scale = 2);
            $table->decimal('saldo', $precision = 8, $scale = 2);
            
            $table->foreign('libroContableId')
                ->references('id')
                ->on('LibroContable')
                ->onDelete('cascade');
            $table->foreign('libroDiarioMovimientoId')
                ->references('id')
                ->on('LibroDiarioMovimiento')
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
        Schema::dropIfExists('LibroContableMovimiento');
    }
};
