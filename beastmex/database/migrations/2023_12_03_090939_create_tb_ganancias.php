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
        Schema::create('tb_ganancias', function (Blueprint $table) {
            $table->id();
            $table->string('NombreCliente');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->decimal('Ganancia', 10, 2); // Columna para almacenar la ganancia, ajusta la precisión según tus necesidades
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ganancias');
    }
};
