<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fuente_de_alimentacion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fuente_de_alimentacion>
 */
class FuenteDeAlimentacionFactory extends Factory
{
    protected $model = Fuente_de_alimentacion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre_del_producto' => fake()->name(),
            'Nombre_del_modelo' => fake()->name(),
            'Marca' => fake()->name(),
            'Dispositivos_compatibles' => fake()->name(),
            'Tipo_de_conector' => fake()->name(),
            'Potencia_de_salida' => fake()->name(),
            'Factor_de_forma' => fake()->name(),
            'voltaje' => fake()->name(),
            'Metodo_de_enfriamiento' => fake()->name(),
            'estatusentidad_id' => '1',
            'Dimensiones_del_artículo_Largo_ancho_alto' => fake()->randomFloat(2),
            'Peso_del_producto' => fake()->name(),
            'Descripcion' => fake()->text(),
        ];
    }
}
