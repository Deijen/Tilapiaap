<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablaAlimentacion extends Model
{
    use HasFactory;

    protected $table = 'tablaalimentacion';

    protected $primaryKey = 'id_tablaAlimentacion';

    protected $fillable = [
        'contenidoProteico',
        'Tamizado',
        'tamañoParticula'
        
       
    ];
}
