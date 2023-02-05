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
        Schema::create('Modelo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuentaCodigo');
            $table->string('nombre', 60);
            $table->string('telefono', 8)->nullable();

            $table->foreign('cuentaCodigo')
                ->references('codigo')
                ->on('Cuenta')
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
        Schema::dropIfExists('Modelo');
    }
};
