<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;

    protected $table = 'tipo_documento';
    protected $primaryKey = 'id_tipo_documento';
    protected $fillable = [
        'id_tipo_documento',
        'nombre_tipo_documento',
        'estado_tipo_documento'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_tipo_documento' => 'boolean'
    ];
}
