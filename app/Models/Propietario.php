<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Propietario extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Le damos a entender a eloquent que el modelo Cultivo corresponde a la tabla create_propietario, 
     * o en su defecto, propietario
     */


    protected $guard = 'propietario';

    protected $table = 'propietario';

    protected $primaryKey = 'id_propietario';
}
