<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RepuestosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $repuestos = [
            [
                'nombre' => 'Filtro de aceite',
                'stock' => 50,
            ],
            [
                'nombre' => 'Amortiguadores',
                'stock' => 30,
            ],
            [
                'nombre' => 'Bujías',
                'stock' => 100,
            ],
            [
                'nombre' => 'Aceite de motor',
                'stock' => 200,
            ],
            [
                'nombre' => 'Frenos',
                'stock' => 40,
            ],
        ];

        // Insertar los registros en la tabla
        foreach ($repuestos as &$data) {
            $data['created_at'] = now();
            $data['updated_at'] = now();
        }

        DB::table('repuestos')->insert($repuestos);
    }
}
