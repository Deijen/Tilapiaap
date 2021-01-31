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


    /**
     * Hay que añadir el fillable a futuro para permitir asignación masiva
     * 
     */

     /**
      * Valores de cultivo : numero de tilapias (int), intensidad del cultivo(int)
      * costos de mantenimiento(double), parametros (crear otra tabla), cantidad de alimento (double)
      */
    protected $fillable =[
        'id_cultivo',
         'valor'];

    //comentario perrón

}
