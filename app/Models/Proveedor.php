<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $primaryKey = 'ID_proveedores';

    protected $fillable = [
        'Nom_proveedores',
        'RUC_proveedores',
        'Telf_proveedores',
        'Correo_proveedores'
    ];
}
