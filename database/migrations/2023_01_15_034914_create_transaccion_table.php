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
        Schema::create('Transaccion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asientoId');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('modeloId');
            $table->char('tipo', 1);
            $table->date('fecha')->useCurrent();
            $table->decimal('total', $precision = 8, $scale = 2);

            // who columns `CREATED_AT`, `CREATED_USER`, `LAST_UPDATED_AT`, `LAST_UPDATED_USER`
            $table->timestamp('createdAt')->useCurrent();
            $table->bigInteger('createdUser');
            $table->timestamp('lastUpdatedAt')->useCurrentOnUpdate();
            $table->bigInteger('lastUpdatedUser');
            
            $table->foreign('asientoId')
                ->references('id')
                ->on('Asiento')
                ->nullable();
            $table->foreign('userId')
                ->references('id')
                ->on('User');
            $table->foreign('modeloId')
                ->references('id')
                ->on('Proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Transaccion');
    }
};
