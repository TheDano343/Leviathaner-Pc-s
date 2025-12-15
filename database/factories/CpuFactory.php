<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cpu>
 */
class CpuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre_del_producto' => $this->faker->name(),
            'Fabricante_del_cpu' => $this->faker->name(),
            'Modelo_del_cpu'  => $this->faker->name(),
            'Velocidad_del_cpu'  => $this->faker->numerify(),
            'estatusentidad_id' => '1',
            'Descripcion' => $this->faker->paragraph(),
            'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
        ];
    }
}
