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
        $reparacionRepuestos = [];

        for ($i=0; $i < 500; $i++) { 
            $reparacionRepuestos[] = [
                'reparacion_id' => rand(1, 150),
                'repuesto_id' => rand(1, 20),
                'cantidad_usada' => rand(1, 20),
            ];
        }
        
        DB::table('reparacion_repuestos')->insert($reparacionRepuestos);
    }
}
