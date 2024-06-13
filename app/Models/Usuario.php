<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'ID_tipo_usuario',
        'Nom_usuarios',
        'Telefono_usuarios',
        'Email_usuarios',
        'Login_usuarios',
        'Password_usuarios',
        'Estado_usuarios',
    ];

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'ID_tipo_usuario');
    }

    public function ingresos()
    {
        return $this->hasMany(Ingreso::class, 'ID_usuarios');
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'ID_usuarios');
    }
}
