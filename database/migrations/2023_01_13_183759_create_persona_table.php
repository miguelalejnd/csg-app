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
        /**
         * Esta tabla almacena una persona natural o jurídica.
         */
        Schema::create('persona', function (Blueprint $table) {
            $table->id('persona_id');
            $table->integer('tipo'); // 1: natural, 2: jurídica.
            $table->string('nombre', 100);
            $table->string('telefono', 15)->nullable();
            $table->string('direccion', 100)->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
};
