<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTiempo extends Model
{
    use HasFactory;

    protected $table = 'tipo_tiempo';
    protected $primaryKey = 'id_tipo_tiempo';
    protected $fillable = [
        'id_tipo_tiempo',
        'nombre_tipo_tiempo',
        'estado_tipo_tiempo'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_tipo_tiempo' => 'boolean'
    ];
}
