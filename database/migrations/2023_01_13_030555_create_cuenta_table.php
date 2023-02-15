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
        Schema::create('Cuenta', function (Blueprint $table) {
            $table->string('codigo', 8)
                ->unique()
                ->primary();
            $table->unsignedBigInteger('catalogoCuentasId');
            $table->string('supercuentaCodigo', 8);
            $table->string('nombre', 60);
            $table->char('tipo', 1);
            $table->char('naturaleza', 1);
            
            $table->foreign('catalogoCuentasId')
                ->references('id')
                ->on('CatalogoCuentas');
            $table->foreign('supercuentaCodigo')
                ->references('codigo')
                ->on('Cuenta')
                ->nullable()
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cuenta');
    }
};
