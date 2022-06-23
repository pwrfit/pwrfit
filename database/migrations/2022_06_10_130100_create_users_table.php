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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('documento')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('direccion')->nullable();
            $table->string('celular')->nullable();
            $table->string('boletin', 2)->nullable();
            $table->unsignedBigInteger('membresia');
            $table->unsignedBigInteger('dificultad_seleccionada')->nullable();
            $table->string('pago')->nullable();
            $table->date('validohasta')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();

            $table->foreign('membresia')->references('id')->on('membresia');
            $table->foreign('dificultad_seleccionada')->references('id')->on('dificultad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
