<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradoAcademico extends Model
{
    use HasFactory;

    protected $table = 'grado_academico';
    protected $primaryKey = 'id_grado_academico';
    protected $fillable = [
        'id_grado_academico',
        'nombre_grado_academico',
        'prefijo_grado_academico',
        'estado_grado_academico'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_grado_academico' => 'boolean'
    ];
}
