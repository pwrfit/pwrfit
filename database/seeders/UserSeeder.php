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
        $usuario = new User();
        $usuario ->nombre = 'Julián';
        $usuario->documento = '1025647184';
        $usuario->email = 'jaospino481@misena.edu.co';
        $usuario->password = Hash::make('12345678');
        $usuario->membresia = 4;
        $usuario->dificultad_seleccionada = random_int(1, 3);
        $usuario->pago = 'COMPLETADO';
        $usuario-> email_verified_at = date("Y-m-d H:i:s");
        $usuario->save();

        $usuario = new User();
        $usuario ->nombre = 'Pablo';
        $usuario->documento = '88242854';
        $usuario->email = 'syvi@mailinator.com';
        $usuario->password = Hash::make('12345678');
        $usuario->membresia = random_int(1, 3);
        $usuario->dificultad_seleccionada = random_int(1, 3);
        $usuario->pago = 'COMPLETADO';
        $usuario-> email_verified_at = date("Y-m-d H:i:s");
        $usuario->save();

        $usuario = new User();
        $usuario ->nombre = 'Yeison';
        $usuario->documento = '56461325';
        $usuario->email = 'wawy@mailinator.com';
        $usuario->password = Hash::make('12345678');
        $usuario->membresia = random_int(1, 3);
        $usuario->dificultad_seleccionada = random_int(1, 3);
        $usuario->pago = 'COMPLETADO';
        $usuario-> email_verified_at = date("Y-m-d H:i:s");
        $usuario->save();
    }
}
