<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Random;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'Julián',
            'rol_id' => '1',
            'documento' => '1025647184',
            'email' => 'jaospino481@misena.edu.co',
            'password' => Hash::make('12345678'),
            'membresia_id' => 4,
            'dificultad_seleccionada' => random_int(1, 3),
            'pago' => 'COMPLETADO',
            'email_verified_at' => date("Y-m-d H:i:s"),
        ]);

        User::create([
            'nombre' => 'Pablo',
            'rol_id' => '2',
            'documento' => '88242854',
            'email' => 'syvi@mailinator.com',
            'password' => Hash::make('12345678'),
            'membresia_id' => 4,
            'dificultad_seleccionada' => random_int(1, 3),
            'pago' => 'COMPLETADO',
            'email_verified_at' => date("Y-m-d H:i:s"),
        ]);

        User::create([
            'nombre' => 'Yeison',
            'rol_id' => '3',
            'documento' => '56461325',
            'email' => 'wawy@mailinator.com',
            'password' => Hash::make('12345678'),
            'membresia_id' => random_int(1, 3),
            'dificultad_seleccionada' => random_int(1, 3),
            'pago' => 'COMPLETADO',
            'email_verified_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
