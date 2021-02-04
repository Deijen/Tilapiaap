<?php

namespace App\Models;

use \Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Foundation\Auth\User as Authenticatable;


class Propietario extends Authenticatable
{
    //use HasFactory;
    use Notifiable;

    /**
     * Le damos a entender a eloquent que el modelo Cultivo corresponde a la tabla create_propietario, 
     * o en su defecto, propietario
     */
    protected $table = 'propietario';

    protected $primaryKey = 'id_propietario';
}
