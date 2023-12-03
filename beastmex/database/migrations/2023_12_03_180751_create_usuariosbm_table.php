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
        Schema::create('usuariosbm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AreaUsuario');
            $table->string('ApellidoPaternoUsuario');
            $table->string('ApellidoMaternoUser')->nullable($value = true);
            $table->string('NombreUsuario');
            $table->string('emailUsuario')->unique();
            $table->string('posicionUsuario');
            $table->string('passwordUsuario');
            $table->string('passwordUsuario_confirmation');
            $table->integer('estatus')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuariosbm');
    }
};
