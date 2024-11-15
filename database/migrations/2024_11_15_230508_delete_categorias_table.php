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
            $table->foreignId('empleado_id')
                ->nullable()
                ->constrained('empleados')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->enum('categoria', [
                'Electricidad',
                'Mecanica',
                'Planchado',
                'General',
                'Preventivo',
            ])->default('General');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mantenimientos', function (Blueprint $table) {
            $table->dropForeign(['empleado_id']);
            $table->dropColumn('categoria');
            $table->dropColumn('empleado_id');
        });
    }
};
