<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoArchivo extends Model
{
    use HasFactory;

    protected $table = 'tipo_archivo';
    protected $primaryKey = 'id_tipo_archivo';
    protected $fillable = [
        'id_tipo_archivo',
        'nombre_tipo_archivo',
        'estado_tipo_archivo',
        'id_nivel_academico'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_tipo_archivo' => 'boolean'
    ];

    public function nivel_academico(): BelongsTo
    {
        return $this->belongsTo(NivelAcademico::class, 'id_nivel_academico');
    }
}
