<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categorias();
        $categoria->nombrecat = 'Gluteos';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Abdominales';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Full-body';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Yoga';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Aeróbicos';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Espalda';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Calentamiento';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Cardio';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Piernas';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Fuerza';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Resistencia';
        $categoria->save();
    }
}
