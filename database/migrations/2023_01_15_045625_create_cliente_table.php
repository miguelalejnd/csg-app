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
        Schema::create('Cliente', function (Blueprint $table) {
            $table->unsignedBigInteger('modeloId');
            $table->char('dui', 9)->nullable();

            $table->foreign('modeloId')
                ->references('id')
                ->on('Modelo')
                ->unique()
                ->onDelete('cascade');

            // who columns `CREATED_AT`, `CREATED_USER`, `LAST_UPDATED_AT`, `LAST_UPDATED_USER`
            $table->timestamp('createdAt')->useCurrent();
            $table->bigInteger('createdUser');
            $table->timestamp('lastUpdatedAt')->useCurrentOnUpdate();
            $table->bigInteger('lastUpdatedUser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cliente');
    }
};
