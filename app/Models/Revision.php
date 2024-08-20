<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Revision extends Model
{
    use HasFactory;

    protected $table = 'revision';
    protected $primaryKey = 'id_revision';
    protected $fillable = [
        'id_revision',
        'fecha_inicio_revision',
        'fecha_fin_revision',
        'iteracion_revision',
        'estado_revision',
        'id_proyecto'
    ];

    public $timestamps = false;

    protected $casts = [
        'fecha_inicio_revision' => 'date',
        'fecha_fin_revision' => 'date',
        'estado_revision' => 'boolean'
    ];

    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }
}
