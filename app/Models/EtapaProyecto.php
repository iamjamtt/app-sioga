<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EtapaProyecto extends Model
{
    use HasFactory;

    protected $table = 'etapa_proyecto';
    protected $primaryKey = 'id_etapa_proyecto';
    protected $fillable = [
        'id_etapa_proyecto',
        'orden_etapa_proyecto',
        'nombre_etapa_proyecto',
        'tiempo_etapa_proyecto',
        'estado_etapa_proyecto',
        'id_tipo_tiempo',
        'id_nivel_academico'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_etapa_proyecto' => 'boolean'
    ];

    public function tipoTiempo(): BelongsTo
    {
        return $this->belongsTo(TipoTiempo::class, 'id_tipo_tiempo');
    }

    public function nivelAcademico(): BelongsTo
    {
        return $this->belongsTo(NivelAcademico::class, 'id_nivel_academico');
    }
}
