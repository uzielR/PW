<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gerencia extends Model
{
    protected $table = 'usuariosbm';

    protected $fillable = [
        'AreaUsuario', 'ApellidoPaternoUsuario', 'ApellidoMaternoUser', // ... otras columnas
    ];
}
