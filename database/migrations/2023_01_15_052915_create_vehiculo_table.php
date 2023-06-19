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
        Schema::create('Vehiculo', function (Blueprint $table) {
            $table->string('matricula', 9)->primary();
            $table->unsignedBigInteger('clienteId');
            $table->string('marca', 30);
            $table->string('modelo', 30);
            $table->integer('anio');

            // who columns `CREATED_AT`, `CREATED_USER`, `LAST_UPDATED_AT`, `LAST_UPDATED_USER`
            $table->timestamp('createdAt')->useCurrent();
            $table->bigInteger('createdUser');
            $table->timestamp('lastUpdatedAt')->useCurrentOnUpdate();
            $table->bigInteger('lastUpdatedUser');
            
            $table->foreign('clienteId')
                ->references('id')
                ->on('Cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vehiculo');
    }
};
