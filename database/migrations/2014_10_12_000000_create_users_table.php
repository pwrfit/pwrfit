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
            $table->integer('rol');
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('direccion')->nullable();
            $table->string('celular')->nullable();
            $table->string('boletin', 2);
            $table->integer('membresia');
            $table->string('pago');
            $table->date('validohasta');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
