<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $primaryKey = 'ID_categorias';

    protected $fillable = [
        'Nom_categorias',
        'Descr_categorias'
    ];

    public $timestamps = true;
}
