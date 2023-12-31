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
        Schema::create('tb_ticket_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreCliente');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('NombreProducto');
            $table->string('Marca5');
            $table->integer('Cantidad5');
            $table->decimal('Precio5',8,2);
            $table->decimal('Total', 10, 2)->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ticket_ventas');
    }
};
