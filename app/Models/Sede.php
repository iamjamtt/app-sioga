<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    protected $table = 'sede';
    protected $primaryKey = 'id_sede';
    protected $fillable = [
        'id_sede',
        'nombre_sede',
        'estado_sede'
    ];

    public $timestamps = false;

    protected $casts = [
        'estado_sede' => 'boolean'
    ];
}
