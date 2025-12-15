<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gabinete>
 */
class GabineteFactory extends Factory
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
        'Tipo_de_estuche' => $this->faker->word(),
        'Usos_recomendados_para_el_producto' => $this->faker->word(),
        'Color' => $this->faker->colorName(),
        'Material' => $this->faker->word(),
        'Metodo_de_enfriamiento' => $this->faker->word(),
        'Nombre_del_modelo' => $this->faker->word(),
        'Luces_de_colores' => $this->faker->colorName(),
        'Tamaño_de_ventilador' => $this->faker->numerify(),
        'estatusentidad_id' => '1',
        'Descripcion' => $this->faker->paragraph(),
        'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
        ];
    }
}
