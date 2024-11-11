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
        Schema::create('credencial_empleados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empleado_id')
                ->nullable()
                ->constrained('empleados')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('usuario')->unique();
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credencial_empleados');
    }
};
