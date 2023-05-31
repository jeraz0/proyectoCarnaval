<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Propuesta>
 */
class PropuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombrePropuesta'=>$this->faker->name(),
            'descripcion'=>$this->faker->text(),
            'calificacion'=>$this->faker->numberBetween(1,10),
            'id_persona'=>$this->faker->numberBetween(1,50),
            'id_Categoria'=>$this->faker->numberBetween(1,3),
            'imagenovideo'=>$this->faker->randomElement(['..\public\img\tablado1.jpg','..\public\img\tablado2.jpg','..\public\img\tablado3.jpg']),
            'fecha'=>$this->faker->date()
        ];
    }
}
