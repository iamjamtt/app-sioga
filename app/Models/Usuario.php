<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Usuario extends Authenticatable
{
    use HasFactory;

    const CREATED_AT = 'creado_en';
    const UPDATED_AT = 'actualizado_en';
    const DELETED_AT = 'eliminado_en';

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'id_usuario',
        'correo_usuario',
        'contrasenia_usuario',
        'foto_usuario',
        'estado_usuario',
        'id_persona',
    ];

    protected $casts = [
        'estado_usuario' => 'boolean',
        'creado_en' => 'datetime',
        'actualizado_en' => 'datetime',
        'eliminado_en' => 'datetime'
    ];

    protected $hidden = [
        'contrasenia_usuario'
    ];

    public function persona(): BelongsTo
    {
        return $this->belongsTo(Persona::class, 'id_persona', 'id_persona');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol', 'id_usuario', 'id_rol', 'id_usuario', 'id_rol');
    }

    public function getFotoUsuarioAttribute($value): string
    {
        $nombres = $this->persona->nombres_persona . ' ' . $this->persona->apellido_paterno_persona . ' ' . $this->persona->apellido_materno_persona;
        $color = '000000';
        $background = 'ffffff';
        return $value ?
            asset($value) :
            'https://ui-avatars.com/api/?name=' . $nombres . '&size=64&&color='. $color .'&background='. $background .'&bold=true';
    }
}
