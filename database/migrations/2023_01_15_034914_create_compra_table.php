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
        Schema::create('Compra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asientoId');
            $table->unsignedBigInteger('usuarioId');
            $table->unsignedBigInteger('proveedorId');
            $table->timestamp('fecha');
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
            $table->foreign('usuarioId')
                ->references('id')
                ->on('User');
            $table->foreign('proveedorId')
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
        Schema::dropIfExists('Compra');
    }
};
