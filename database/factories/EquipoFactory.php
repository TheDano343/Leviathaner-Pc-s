<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipos>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre_producto' => $this->faker->name(),
            'Tipo_de_tarjeta_grafica' => $this->faker->name(),
            'procecadores_id' => $this->faker->numberBetween(1,2),
            'gabinetes_id' => $this->faker->numberBetween(1,2),
            'pantallas_id' => $this->faker->numberBetween(1,2),
            'teclados_id' => $this->faker->numberBetween(1,2),
            'mouse_id' => $this->faker->numberBetween(1,2),
            'rams_id' => $this->faker->numberBetween(1,2),
            'graficas_id' => $this->faker->numberBetween(2,2),
            'madres_id' => $this->faker->numberBetween(1,2),
            'refrigeracion_id' => $this->faker->numberBetween(1,2),
            'alimentaciones_id' => $this->faker-> numberBetween(1,2),
            'categorias_id' => $this->faker-> numberBetween(1,3),
            'estatusentidad_id' => '1',
            'cpu_id' =>  $this->faker->numberBetween(1,2),
            'Descripcion' =>  $this->faker->paragraph(),
            'Precio' => $this->faker->numerify(),
        ];
    }
}
