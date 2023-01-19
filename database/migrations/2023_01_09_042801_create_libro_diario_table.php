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
        Schema::create('LibroDiario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('periodoId');
            $table->string('descripcion', 60);
            
            $table->foreign('periodoId')
                ->references('id')
                ->on('Periodo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LibroDiario');
    }
};