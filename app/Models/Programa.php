<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programa extends Model
{
    use HasFactory;

    protected $table = 'programa';
    protected $primaryKey = 'id_programa';
    protected $fillable = [
        'id_programa',
        'siglas_programa',
        'nombre_programa',
        'mencion_programa',
        'prefijo_programa',
        'titulo_programa',
        'estado_programa',
        'id_sede',
        'id_facultad',
        'id_tipo_programa'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_programa' => 'boolean'
    ];

    public function sede(): BelongsTo
    {
        return $this->belongsTo(Sede::class, 'id_sede');
    }

    public function facultad(): BelongsTo
    {
        return $this->belongsTo(Facultad::class, 'id_facultad');
    }

    public function tipoPrograma(): BelongsTo
    {
        return $this->belongsTo(TipoPrograma::class, 'id_tipo_programa');
    }
}
