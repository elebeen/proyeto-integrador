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
        Schema::table('mantenimientos', function (Blueprint $table) {
            // Modificar las columnas existentes
            $table->date('fecha_entrega_cliente')->nullable()->change();
            $table->date('fecha_devol_cliente')->nullable()->change();
            $table->boolean('estado')->default(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mantenimientos', function (Blueprint $table) {
            // Revertir los cambios
            $table->date('fecha_entrega_cliente')->nullable(false)->change();
            $table->date('fecha_devol_cliente')->nullable(false)->change();
            $table->boolean('estado')->default(null)->change(); 
            // Remueve el valor por defecto
        });
    }
};
