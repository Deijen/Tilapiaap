<?php

namespace Database\Factories;

use App\Models\Piscicultor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PiscicultorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Piscicultor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /**
             * Tira error al ejecutar el seeder (debe ser por la llave foranea)
             */
            'id_piscicultor' =>$this->faker,
            'propietario_id'=>$this->faker,
            'nombre'=>$this->faker,
            'salario'=>$this->faker,
            'correo'=>$this->faker
        ];
    }
}
