<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReparacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $reparaciones = [];

    for ($i = 0; $i < 500; $i++) {
        $reparaciones[] = [
            'mantenimiento_id' => rand(1, 50), // Generar un valor aleatorio entre 1 y 50
            'descripcion' => 'Descripcion de reparacion nro' . $i,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    DB::table('reparaciones')->insert($reparaciones);
}
}
