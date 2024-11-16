<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReparacionRepuestosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reparacionRepuestos = [
            [
                'reparacion_id' => 5,
                'repuesto_id' => 3,
                'cantidad_usada' => 2,
            ],
            [
                'reparacion_id' => 6,
                'repuesto_id' => 5,
                'cantidad_usada' => 1,
            ],
            [
                'reparacion_id' => 7,
                'repuesto_id' => 2,
                'cantidad_usada' => 4,
            ],
            [
                'reparacion_id' => 8,
                'repuesto_id' => 1,
                'cantidad_usada' => 3,
            ],
        ];

        DB::table('reparacion_repuestos')->insert($reparacionRepuestos);
    }
}
