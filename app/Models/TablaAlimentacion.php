<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablaAlimentacion extends Model
{
    use HasFactory;

    protected $table = 'tablaalimentación';

    protected $primaryKey = 'id_tablaAlimentacion';

    protected $fillable = [
        'id_piscicultor',
        'Contenido proteico',
        'Tamizado',
        'Tamaño de particula'
        
       
    ];
}
