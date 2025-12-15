<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alimentacion>
 */
class AlimentacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'Nombre_producto' => $this->faker->word(),
        'Nombre_modelo' => $this->faker->word(),
        'Marca' => $this->faker->word(),
        'Dispositivos_compatibles' => $this->faker->word(),
        'Tipo_conector' => $this->faker->word(),
        'Potencia_de_salida' => $this->faker->word(),
        'Factor_de_forma' => $this->faker->word(),
        'Voltaje' => $this->faker->numerify(),
        'Metodo_de_enfriamiento' => $this->faker->word(),
        'Dimensiones_de_articulo' => $this->faker->numerify(),
        'Largo_y_ancho' => $this->faker->numerify(),
        'Peso_del_producto' => $this->faker->numerify(),
        'estatusentidad_id' => '1',
        'Descripcion' => $this->faker->paragraph(),
        'Portada' => fake()->randomElement(['public/upload/4lXbxDNIMT4odMR1v8D9RcueMCpB84KjBSwNkV5h.jpg'])
        ];
    }
}
