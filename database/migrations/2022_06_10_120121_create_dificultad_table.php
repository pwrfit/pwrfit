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
        Schema::create('dificultad', function (Blueprint $table) {
            $table->id();
            $table->string('dificultad');
        });

        DB::insert('insert into dificultad (id, dificultad) values (?, ?)', [1, 'Fácil']);
        DB::insert('insert into dificultad (id, dificultad) values (?, ?)', [2, 'Intermedio']);
        DB::insert('insert into dificultad (id, dificultad) values (?, ?)', [3, 'Avanzado']);
        // DB::insert('insert into dificultad (id, dificultad) values (?, ?)', [4, 'Sin definir']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dificultad');
    }
};
