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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('rol');
        });

        DB::insert('insert into roles (id, rol) values (?, ?)', [1, 'Administrador']);
        DB::insert('insert into roles (id, rol) values (?, ?)', [2, 'Instructor']);
        DB::insert('insert into roles (id, rol) values (?, ?)', [3, 'Cliente']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
