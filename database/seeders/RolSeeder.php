<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create(['rol' => 'Admin',]);
        Roles::create(['rol' => 'Instructor',]);
        Roles::create(['rol' => 'Cliente']);
    }
}
