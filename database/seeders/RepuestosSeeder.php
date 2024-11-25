<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RepuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $repuestos = [];

        for ($i = 0; $i < 100; $i++) {
            $repuestos[] = [
                'nombre' => 'Repuesto ' . Str::random(5), // Nombre dinámico
                'stock' => rand(10, 200), // Stock aleatorio entre 10 y 200
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insertar los registros en la tabla
        DB::table('repuestos')->insert($repuestos);
    }
}
