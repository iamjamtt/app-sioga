<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProyectoJurado extends Model
{
    use HasFactory;

    const CREATED_AT = 'creado_en';
    const UPDATED_AT = 'actualizado_en';
    const DELETED_AT = 'eliminado_en';

    protected $table = 'proyecto_jurado';
    protected $primaryKey = 'id_proyecto_jurado';
    protected $fillable = [
        'id_proyecto_jurado',
        'version_proyecto_jurado',
        'estado_proyecto_jurado',
        'id_proyecto',
        'id_docente',
        'id_tipo_jurado'
    ];

    protected $casts = [
        'estado_proyecto_jurado' => 'boolean',
        'creado_en' => 'datetime',
        'actualizado_en' => 'datetime',
        'eliminado_en' => 'datetime'
    ];

    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function docente(): BelongsTo
    {
        return $this->belongsTo(Docente::class, 'id_docente');
    }

    public function tipoJurado(): BelongsTo
    {
        return $this->belongsTo(TipoJurado::class, 'id_tipo_jurado');
    }
}
