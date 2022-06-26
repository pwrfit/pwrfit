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
        $categoria->icono = 'peach';
        $categoria->color = 'danger';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Abdominales';
        $categoria->icono = 'star-of-life';
        $categoria->color = 'info';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Full-body';
        $categoria->icono = 'dumbbell';
        $categoria->color = 'warning';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Yoga';
        $categoria->icono = 'head-side-medical';
        $categoria->color = 'light';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Aeróbicos';
        $categoria->icono = 'music';
        $categoria->color = 'info';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Espalda';
        $categoria->icono = 'child';
        $categoria->color = 'warning';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Calentamiento';
        $categoria->icono = 'child-reaching';
        $categoria->color = 'primary';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Cardio';
        $categoria->icono = 'heart-pulse';
        $categoria->color = 'danger';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Piernas';
        $categoria->icono = 'drumstick';
        $categoria->color = 'success';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Fuerza';
        $categoria->icono = 'dumbbell';
        $categoria->color = 'secondary';
        $categoria->save();

        $categoria = new Categorias();
        $categoria->nombrecat = 'Resistencia';
        $categoria->icono = 'person-running';
        $categoria->color = 'info';
        $categoria->save();
    }
}
