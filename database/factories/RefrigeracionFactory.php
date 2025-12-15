<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Refrigeracion>
 */
class RefrigeracionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'Nombre_del_producto'  => $this->faker->word(),
        'Dimensiones_del_producto'  => $this->faker->numerify(),
        'Voltaje'  => $this->faker->numerify(),
        'Metodo_de_enfriamiento'  => $this->faker->word(),
        'Dispositivos_compatibles'  => $this->faker->word(),
        'Nivel_de_ruido' => $this->faker->numerify(),
        'Material' => $this->faker->word(),
        'Velocidad_maxima_de_rotacion' => $this->faker->numerify(),
        'estatusentidad_id' => '1',
        'Descripcion' => $this->faker->paragraph(),
        'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
        ];
    }
}
