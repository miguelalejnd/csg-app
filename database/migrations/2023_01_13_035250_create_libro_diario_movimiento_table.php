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
        Schema::create('LibroDiarioMovimiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asientoId');
            $table->char('tipoMovimiento', 1);
            $table->decimal('monto', $precision = 8, $scale = 2);
            
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
        Schema::dropIfExists('LibroDiarioMovimiento');
    }
};
