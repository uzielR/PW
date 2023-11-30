<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreProducto');
            $table->string('NombreMarca');
            $table->decimal('CostoProducto',8,2);
            $table->date('FechaIngreso');
            $table->decimal('PrecioVenta',8,2);
            $table->string('ImagenProducto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_productos');
    }
};
