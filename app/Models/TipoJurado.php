<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoJurado extends Model
{
    use HasFactory;

    protected $table = 'tipo_jurado';
    protected $primaryKey = 'id_tipo_jurado';
    protected $fillable = [
        'id_tipo_jurado',
        'nombre_tipo_jurado',
        'orden_tipo_jurado',
        'estado_tipo_jurado'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_tipo_jurado' => 'boolean'
    ];
}
