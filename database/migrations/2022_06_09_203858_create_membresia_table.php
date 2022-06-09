<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresia', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->integer('precio');
        });

        DB::insert('insert into membresia (id, tipo, precio) values (?, ?, ?)', [1, 'Usuario Comprometido', '199900']);
        DB::insert('insert into membresia (id, tipo, precio) values (?, ?, ?)', [2, 'Usuario Casual', '20900']);
        DB::insert('insert into membresia (id, tipo, precio) values (?, ?, ?)', [3, 'Usuario Aficionado', '5900']);
        DB::insert('insert into membresia (id, tipo, precio) values (?, ?, ?)', [4, 'Miembro', '0']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membresia');
    }
};
