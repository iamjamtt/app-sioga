<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persona extends Model
{
    use HasFactory;

    const CREATED_AT = 'creado_en';
    const UPDATED_AT = 'actualizado_en';
    const DELETED_AT = 'eliminado_en';

    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
    protected $fillable = [
        'id_persona',
        'documento_persona',
        'nombres_persona',
        'apellido_paterno_persona',
        'apellido_materno_persona',
        'celular_persona',
        'direccion_persona',
        'estado_persona',
        'id_tipo_documento',
        'id_genero',
        'id_grado_academico'
    ];

    protected $casts = [
        'estado_persona' => 'boolean',
        'creado_en' => 'datetime',
        'actualizado_en' => 'datetime',
        'eliminado_en' => 'datetime'
    ];

    protected $hidden = [
        'eliminado_en',
        'eliminado_por'
    ];

    public function tipoDocumento(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class, 'id_tipo_documento', 'id_tipo_documento');
    }

    public function genero(): BelongsTo
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id_genero');
    }

    public function gradoAcademico(): BelongsTo
    {
        return $this->belongsTo(GradoAcademico::class, 'id_grado_academico', 'id_grado_academico');
    }
}
