<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RevisionJurado extends Model
{
    use HasFactory;

    protected $table = 'revision_jurado';
    protected $primaryKey = 'id_revision_jurado';
    protected $fillable = [
        'id_revision_jurado',
        'observacion_revision_jurado',
        'fecha_recepcion_revision_jurado',
        'fecha_revision_jurado',
        'estado_revision_jurado',
        'id_revision',
        'id_proyecto_jurado'
    ];

    public $timestamps = false;

    protected $casts = [
        'fecha_recepcion_revision_jurado' => 'date',
        'fecha_revision_jurado' => 'date',
        'estado_revision_jurado' => 'boolean'
    ];

    public function revision(): BelongsTo
    {
        return $this->belongsTo(Revision::class, 'id_revision');
    }

    public function proyectoJurado(): BelongsTo
    {
        return $this->belongsTo(ProyectoJurado::class, 'id_proyecto_jurado');
    }
}
