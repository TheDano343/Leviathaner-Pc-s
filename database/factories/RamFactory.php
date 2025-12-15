<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ram>
 */
class RamFactory extends Factory
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
        'Marca' => $this->faker->word(),
        'Tamaño_de_la_memoria' => $this->faker->numerify(),
        'Tegnologia_de_la_memoria_ram' => $this->faker->word(),
        'Tamaño_de_la_memoria' => $this->faker->numerify(),
        'Velocidad_de_memoria' => $this->faker->numerify(),
        'Dispositivos_compatibles' => $this->faker->word(),
        'estatusentidad_id' => '1',
        'Descripcion' => $this->faker->paragraph(),
        'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
        ];
    }
}
