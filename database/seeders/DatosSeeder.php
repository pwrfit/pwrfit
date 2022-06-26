<?php

namespace Database\Seeders;

use App\Models\Datos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datos::create([
        'documento' => '56461325', 
        'edad' => '19',
        'peso' => '70',
        'altura' => '1.70',
        'genero' => 'Masculino',
        'imc' => '24.2']);
    }
}
