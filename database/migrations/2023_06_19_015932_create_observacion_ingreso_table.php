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
        Schema::create('observacion_ingreso', function (Blueprint $table) {
            $table->id('observacion_ingreso_id');
            $table->unsignedBigInteger('visita_id');
            $table->string('descripcion', 100);
            $table->timestamps();
            
            $table->foreign('visita_id')
                ->references('visita_id')
                ->on('visita')
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
        Schema::dropIfExists('observacion_ingreso');
    }
};
