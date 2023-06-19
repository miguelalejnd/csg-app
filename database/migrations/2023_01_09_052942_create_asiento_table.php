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
            $table->unsignedBigInteger('fechaAsientosId');
            $table->string('glosa', 100);
            
            $table->foreign('fechaAsientosId')
                ->references('id')
                ->on('FechaAsientos');
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