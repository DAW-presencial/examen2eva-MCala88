<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{

    protected $table = "cen_docentes";

    protected $fillable = [
         'Denominacion',
            'Codigo',
            'CIF',
            'Titularidad',
            'Dir_postal',
            'CP', 
            'Director_nom',
            'Director_apell', 
            'Director_apell2',   
            'Identificada',
            'Tipo_identificada'
    ];
}