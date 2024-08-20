<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acta extends Model
{
    use HasFactory;

    protected $table = 'acta';
    protected $primaryKey = 'id_acta';
    protected $fillable = [
        'id_acta',
        'codigo_acta',
        'archivo_acta',
        'fecha_acta',
        'estado_acta',
        'id_proyecto',
        'id_tipo_archivo'
    ];

    public $timestamps = false;

    protected $casts = [
        'fecha_acta' => 'date',
        'estado_acta' => 'boolean'
    ];

    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function tipoArchivo(): BelongsTo
    {
        return $this->belongsTo(TipoArchivo::class, 'id_tipo_archivo');
    }
}
