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
        Schema::create('LibroAuxiliarMovimiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libroAuxiliarId');
            $table->unsignedBigInteger('asientoId');
            $table->date('fecha');
            $table->char('tipoMovimeinto', 1);
            $table->decimal('monto', $precision = 8, $scale = 2);
            $table->decimal('saldo', $precision = 8, $scale = 2);
            
            $table->foreign('libroAuxiliarId')
                ->references('id')
                ->on('LibroAuxiliar')
                ->onDelete('cascade');
            $table->foreign('asientoId')
                ->references('id')
                ->on('Asiento')
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
        Schema::dropIfExists('LibroAuxiliarMovimiento');
    }
};
