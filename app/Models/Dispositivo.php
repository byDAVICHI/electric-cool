<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificador',
        'fecha_ingreso',
        'tipo_servicio',
        'descripcion',
        'foto1',
        'foto2',
    ];
}
