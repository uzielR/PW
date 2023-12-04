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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('apellidoP')->nullable();
            $table->string('apellidoM')->nullable();
            $table->string('nombreEmpresa');
            $table->string('marca');
            $table->string('direccion');
            $table->string('direccion2');
            $table->string('codigoPostalphp');
            $table->string('telefono'); 
            $table->string('correoE');
            $table->integer('estatus')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
