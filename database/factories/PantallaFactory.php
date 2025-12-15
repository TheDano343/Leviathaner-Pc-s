<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pantalla>
 */
class PantallaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'Nombre_del_producto' => $this->faker->word(),
        'Resolucion' => $this->faker->numerify(),
        'Tamaño_de_la_pantalla' => $this->faker->numerify(),
        'Descripcion_de_la_superficie_de_la_pantalla' => $this->faker->numerify(),
        'Descripcion' => $this->faker->paragraph(),
        'estatusentidad_id' => '1',
        'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
        ];
    }
}
