<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grafica>
 */
class GraficaFactory extends Factory
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
                'Coprocesador' => $this->faker->word(),
                'Marca' => $this->faker->word(),
                'Ram_para_graficos'  => $this->faker->word(),
                'Descripcion' => $this->faker->paragraph(),
                'estatusentidad_id' => '1',
                'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
                ];
        
    }
}
