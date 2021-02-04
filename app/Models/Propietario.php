<?php

namespace App\Models;

use \Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use \Illuminate\Foundation\Auth\User as Authenticatable;


class Propietario extends Authenticatable
{
    //use HasFactory;
    use Notifiable;
=======
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Propietario extends Authenticatable
{
    use HasFactory, Notifiable;
>>>>>>> 381a5977f6ee4379c00e042ebc05670dc893365e

    /**
     * Le damos a entender a eloquent que el modelo Cultivo corresponde a la tabla create_propietario, 
     * o en su defecto, propietario
     */
    protected $table = 'propietario';

    protected $primaryKey = 'id_propietario';
}
