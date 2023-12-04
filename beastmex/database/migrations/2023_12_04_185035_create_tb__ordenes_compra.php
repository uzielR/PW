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
        Schema::create('tb__ordenes_compra', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('NombreEmpresaB')->default('Beastmex');
            $table->string('DireccionEmpresaB')->default('Union ');
            $table->string('Direccion2EmpresaB')->default('Avenida Revolucion');
            $table->string('CorreoEmpresaB')->default('beastmex@gmail.com');
            $table->string('CodigoPostalEmpresaB')->default('7888');
            $table->string('TelefonoEmpresaB')->default('4481299715');
            $table->string('idProductos')->forein
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb__ordenes_compra');
    }
};
