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
        Schema::create('reparacion_repuestos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reparacion_id')
                ->nullable()            
                ->constrained('reparaciones')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('repuesto_id')
                ->nullable()
                ->constrained('repuestos')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->integer('cantidad_usada')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparacion_repuestos');
    }
};
