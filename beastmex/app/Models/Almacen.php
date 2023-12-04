<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    protected $table = 'tb_productos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'idProducto',
        'NombreMarca',
        'CostoProducto',
        'FechaIngreso',
        'PrecioVenta', // Si la columna 'updated_at' no está en la tabla, puedes quitarla
        // Agrega otros campos si es necesario
    ];
}
