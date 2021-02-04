<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Piscicultor extends Authenticatable
{
    use HasFactory;

    /**
     * Le damos a entender a eloquent que el modelo Cultivo corresponde a la tabla create_piscicultor, 
     * o en su defecto, piscicultor
     */
    protected $table = 'piscicultor';

    protected $primaryKey = 'id_piscicultor'; 

    protected $fillable = [
        'id_piscicultor',
        'Nombre',
        'salario',
        'correo'
       
    ];
}
