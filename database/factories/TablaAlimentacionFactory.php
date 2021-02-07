<?php

namespace Database\Factories;

use App\Models\TablaAlimentacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class TablaAlimentacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TablaAlimentacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_tablaAlimentacion' => '1',
            'Contenido Proteico' => 0,
            'Tamizado' => 0,
            'Tamaño de particula' => 0
        ];
    }
}
