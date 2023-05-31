<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\Propuesta;
use Illuminate\Database\Seeder;
use App\Models\Persona;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categoria1 = new Categoria;
        $categoria1->nombre = 'Desfile';
        $categoria1->save();
        $categoria2 = new Categoria;
        $categoria2->nombre = 'Tablados';
        $categoria2->save();
        $categoria3 = new Categoria;
        $categoria3->nombre = 'Gastronomía';
        $categoria3->save();
        $persona = Persona::factory(50)->create();
        $propuesta = Propuesta::factory(50)->create();

        $this->call(RoleSedeer::class);
        $this->call(UserSeeder::class);

    }
}
