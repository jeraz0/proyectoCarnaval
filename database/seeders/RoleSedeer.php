<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'superUsuario']);
        $role2 = Role::create(['name'=>'participante']);
        $role3 = Role::create(['name'=>'usuario']);

        Permission::create(['name'=>'super.categorias.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'super.categorias.store'])->syncRoles([$role1]);
        Permission::create(['name'=>'super.categorias.destroy'])->syncRoles([$role1]);


        Permission::create(['name'=>'super.personas.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'super.personas.store'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'super.personas.destroy'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'super.personas.edit'])->syncRoles([$role1,$role3]);

        Permission::create(['name'=>'super.propuestas.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'super.propuestas.store'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'super.propuestas.destroy'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'super.propuestas.edit'])->syncRoles([$role1,$role2]);

    }
}
