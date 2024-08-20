<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProyectoArchivo extends Model
{
    use HasFactory;

    protected $table = 'proyecto_archivo';
    protected $primaryKey = 'id_proyecto_archivo';
    protected $fillable = [
        'id_proyecto_archivo',
        'archivo_proyecto_archivo',
        'estado_proyecto_archivo',
        'id_revision',
        'id_tipo_archivo'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_proyecto_archivo' => 'boolean'
    ];

    public function revision(): BelongsTo
    {
        return $this->belongsTo(Revision::class, 'id_revision');
    }

    public function tipoArchivo(): BelongsTo
    {
        return $this->belongsTo(TipoArchivo::class, 'id_tipo_archivo');
    }
}
