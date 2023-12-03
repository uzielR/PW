<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    protected $table = 'tb_ticket_ventas'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'id',
        'NombreProducto',
        'Cantidad5',
        'Precio5',
        'updated_at', // Si la columna 'updated_at' no está en la tabla, puedes quitarla
        // Agrega otros campos si es necesario
    ];
}
