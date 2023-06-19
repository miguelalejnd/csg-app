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
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id('vehiculo_id');
            $table->unsignedBigInteger('persona_id');         
            $table->string('matricula', 6);
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->integer('model_year');
            $table->timestamps();
            
            $table->foreign('persona_id')
                ->references('persona_id')
                ->on('cliente')
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
        Schema::dropIfExists('vehiculo');
    }
};
