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
        Schema::table('categorias', function (Blueprint $table) {
            $table->dropColumn('electricidad');
            $table->dropColumn('arranque');
            $table->dropColumn('planchado');
            $table->dropColumn('pintura');
            $table->dropColumn('tuning');
            $table->dropColumn('caja_cambios');

            $table->string('electronica');
            $table->string('mecanica');
            $table->string('planchado_pintura');         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categorias', function (Blueprint $table) {
            $table->dropColumn('electronica');
            $table->dropColumn('mecanica');
            $table->dropColumn('planchado_pintura');

            $table->string('electricidad');
            $table->string('arranque');
            $table->string('planchado');
            $table->string('pintura');
            $table->string('tuning');
            $table->string('caja_cambios');
        });
    }
};
