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
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->integer('intento');
            $table->integer('estado');

            $table->unsignedBigInteger('ficha_id');
            $table->unsignedBigInteger('user_id_evaluador');
            $table->unsignedBigInteger('user_id_evaluado');
            $table->unsignedBigInteger('periodo_id');

            $table->foreign('ficha_id')->references('id')->on('fichas')->onDelete('cascade');
            $table->foreign('user_id_evaluador')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id_evaluado')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('periodo_id')->references('id')->on('periodos')->onDelete('cascade');

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
        Schema::dropIfExists('evaluaciones');
    }
};
