<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyecto extends Model
{
    use HasFactory;

    const CREATED_AT = 'creado_en';
    const UPDATED_AT = 'actualizado_en';
    const DELETED_AT = 'eliminado_en';

    protected $table = 'proyecto';
    protected $primaryKey = 'id_proyecto';
    protected $fillable = [
        'id_proyecto',
        'titulo_proyecto',
        'archivo_resolucion_asesor_proyecto',
        'archivo_resolucion_jurado_proyecto',
        'archivo_anexo_proyecto',
        'estado_grupal_proyecto',
        'estado_aprobado_proyecto',
        'estado_aprobado_final_proyecto',
        'estado_proyecto',
        'id_linea_investigacion',
        'id_etapa_proyecto',
    ];

    protected $casts = [
        'estado_grupal_proyecto' => 'boolean',
        'estado_aprobado_proyecto' => 'boolean',
        'estado_aprobado_final_proyecto' => 'boolean',
        'estado_proyecto' => 'boolean',
        'creado_en' => 'datetime',
        'actualizado_en' => 'datetime',
        'eliminado_en' => 'datetime'
    ];

    public function lineaInvestigacion(): BelongsTo
    {
        return $this->belongsTo(LineaInvestigacion::class, 'id_linea_investigacion');
    }

    public function etapaProyecto(): BelongsTo
    {
        return $this->belongsTo(EtapaProyecto::class, 'id_etapa_proyecto');
    }
}
