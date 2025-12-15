<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Madre>
 */
class MadreFactory extends Factory
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
        'Enchufe_de_CPU' => $this->faker->word(),
        'Dispositivos_Compatibles' => $this->faker->word(),
        'Tecnologia_de_la_memoria_RAM' => $this->faker->word(),
        'Procesadores_Compatibles' => $this->faker->word(),
        'Tipo_de_circuitos_integrados' => $this->faker->word(),
        'Velocidad_del_reloj_de_la_memoria'  => $this->faker->numerify(),
        'Nombre_del_modelo' => $this->faker->word(),
        'Capacidad_de_almacenamiento_de_la_memoria' => $this->faker->numerify(),
        'Descripcion' => $this->faker->paragraph(),
        'estatusentidad_id' => '1',
        'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
        ];
    }
}
