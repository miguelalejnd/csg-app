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
        Schema::create('LibroContable', function (Blueprint $table) {
            $table->id();
            $table->char('cuentaCodigo', 8);
            $table->unsignedBigInteger('periodoId');
            $table->char('tipo', 1);
            $table->string('descripcion', 60);
            
            $table->foreign('cuentaCodigo')
                ->references('codigo')
                ->on('Cuenta')
                ->onDelete('cascade');
            $table->foreign('periodoId')
                ->references('id')
                ->on('Periodo')
                ->nullable()
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LibroContable');
    }
};
