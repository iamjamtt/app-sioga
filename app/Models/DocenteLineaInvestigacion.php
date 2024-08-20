<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocenteLineaInvestigacion extends Model
{
    use HasFactory;

    protected $table = 'docente_linea_investigacion';
    protected $primaryKey = 'id_docente_linea_investigacion';
    protected $fillable = [
        'id_docente_linea_investigacion',
        'id_docente',
        'id_linea_investigacion',
    ];

    public $timestamps = false;

    public function docente(): BelongsTo
    {
        return $this->belongsTo(Docente::class, 'id_docente');
    }

    public function lineaInvestigacion(): BelongsTo
    {
        return $this->belongsTo(LineaInvestigacion::class, 'id_linea_investigacion');
    }
}
