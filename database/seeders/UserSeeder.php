<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Juan Erazo',
            'email' => 'juanpa.erazo@umariana.edu.com',
            'password' => bcrypt('2345678')
        ])->assignRole('superUsuario');

        User::factory(9)->create();
    }
}
