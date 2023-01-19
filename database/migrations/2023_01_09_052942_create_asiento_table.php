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
        Schema::create('Asiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libroDiarioId');
            $table->timestamp('fecha')->useCurrent();
            $table->string('glosa', 100);
            
            $table->foreign('libroDiarioId')
                ->references('id')
                ->on('LibroDiario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Asiento');
    }
};