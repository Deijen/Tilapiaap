<?php

namespace Database\Factories;

use App\Models\Propietario;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropietarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Propietario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /**
             * El factory de propietario tira error si el id se mantiene igual. El id debe ser cambiado cada que se corra el seeder
             * NOTA : Se debe poder auto incrementar.
             * PENDIENTE: Con un Propietario en la base de datos, tratar de hacer el inicio de sesión.
             * NOTA: Si no se pueden aplicar "roles", no trabajar con la clase usuario
             */
            'id_propietario' => '1', //Auto incrementar el id
            'Nombre'=>$this->faker->name,
            'patrimonio'=> '100000000',
            'correo'=>'propietario@hotmail.com',   //$this->faker->unique()->safeEmail, Utilizar esta sentencia para crear un correo aleatorio
            'password'=> 'contraseña'
        ];
    }
}
