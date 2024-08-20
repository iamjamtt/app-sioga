<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LineaInvestigacion extends Model
{
    use HasFactory;

    protected $table = 'linea_investigacion';
    protected $primaryKey = 'id_linea_investigacion';
    protected $fillable = [
        'id_linea_investigacion',
        'nombre_linea_investigacion',
        'estado_linea_investigacion',
        'id_programa'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_docente' => 'boolean'
    ];

    public function programa(): BelongsTo
    {
        return $this->belongsTo(Programa::class, 'id_programa');
    }
}
