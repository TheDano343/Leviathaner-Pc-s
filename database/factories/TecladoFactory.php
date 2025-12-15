<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teclado>
 */
class TecladoFactory extends Factory
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
        'Dispositivos_compatibles' => $this->faker->word(),
        'Tegnologia_de_conectividad' => $this->faker->word(),
        'Descripcion_del_teclado' => $this->faker->word(),
        'Usos_recomendados_para_producto' => $this->faker->word(),
        'Caracteristica_especial'  => $this->faker->word(),
        'Color'=> $this->faker->colorName(),
        'estatusentidad_id' => '1',
        'Descripcion' => $this->faker->paragraph(),
        'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
        ];
    }
}
