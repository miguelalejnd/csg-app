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
        Schema::create('transaccion', function (Blueprint $table) {
            $table->id('transaccion_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('persona_id');
            $table->integer('tipo'); // 1: venta, 2: compra.
            $table->integer('estado'); // 1: pendiente, 2: cancelado.
            $table->decimal('total', $precision = 8, $scale = 2);
            $table->timestamps();
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
            $table->foreign('persona_id')
                ->references('persona_id')
                ->on('persona')
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
        Schema::dropIfExists('transaccion');
    }
};
