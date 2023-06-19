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
        Schema::create('Articulo', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('nombre', 60);
            $table->string('marca', 30);
            $table->decimal('precio', $precision = 8, $scale = 2);

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
        Schema::dropIfExists('Articulo');
    }
};
