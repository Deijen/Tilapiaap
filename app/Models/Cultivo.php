<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    use HasFactory;  

    /**
     * Le damos a entender a eloquent que el modelo Cultivo corresponde a la tabla create_cultivo, 
     * o en su defecto, cultivo
     */
    protected $table = 'cultivo';  

    protected $primaryKey = 'id_cultivo';

    protected $fillable =[ 'tablaAlimentacion_id', 'piscicultor_id', 'valor'];

    //comentario perrón

}
