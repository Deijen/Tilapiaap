<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Piscicultor;
use App\Models\Propietario;
use App\Models\TablaAlimentacion;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * NOTA: Se pueden usar los seeders para crear datos de prueba en la base de datos, o bien si queremos insertar datos
     * NOTA: Usar el comando 'save' cuando queramos crear un seeder especifico
     *
     * @return void
     */
    public function run()
    {
       // User::factory(10)->create();
        /**
         * El factory de Piscicultor tira error. Posiblemente por las llaves foraneas
         */
       //Piscicultor::factory(10)->create();
      Propietario::factory(1)->create();
      TablaAlimentacion::factory(1)->create();
       
    }
}
