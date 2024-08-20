<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    protected $table = 'facultad';
    protected $primaryKey = 'id_facultad';
    protected $fillable = [
        'id_facultad',
        'siglas_facultad',
        'nombre_facultad',
        'estado_facultad'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_facultad' => 'boolean'
    ];
}
