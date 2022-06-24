<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Instructor']);
        $role3 = Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'admin.dashboard']);

        Permission::create(['name' => 'admin.categorias.index']);
        Permission::create(['name' => 'admin.categorias.create']);
        Permission::create(['name' => 'admin.categorias.edit']);
        Permission::create(['name' => 'admin.categorias.destroy']);

        Permission::create(['name' => 'admin.usuarios.index']);
        Permission::create(['name' => 'admin.usuarios.create']);
        Permission::create(['name' => 'admin.usuarios.edit']);
        Permission::create(['name' => 'admin.usuarios.destroy']);


        Permission::create(['name' => 'admin.roles.index']);
        Permission::create(['name' => 'admin.roles.create']);
        Permission::create(['name' => 'admin.roles.edit']);
        Permission::create(['name' => 'admin.roles.destroy']);


        Permission::create(['name' => 'admin.videos.index']);
        Permission::create(['name' => 'admin.videos.destroy']);

        Permission::create(['name' => 'instructor.subir.index']);
    }
}
