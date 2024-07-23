<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'genero';
    protected $primaryKey = 'id_genero';
    protected $fillable = [
        'id_genero',
        'nombre_genero',
        'estado_genero'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_genero' => 'boolean'
    ];
}
