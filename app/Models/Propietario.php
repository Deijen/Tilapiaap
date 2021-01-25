<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    /**
     * Le damos a entender a eloquent que el modelo Cultivo corresponde a la tabla create_propietario, 
     * o en su defecto, propietario
     */
    protected $table = 'propietario';

    protected $primaryKey = 'id_propietario';
}
