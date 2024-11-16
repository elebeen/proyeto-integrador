<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autos = [
            [
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'kilometraje' => 150000,
                'color' => 'Blanco',
                'placa' => 'ABC-234',
                'anio_fabri' => 2015,
                'user_id' => 1,  // ID de usuario asociado, puede ajustarse según los usuarios existentes
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'kilometraje' => 120000,
                'color' => 'Rojo',
                'placa' => 'XYZ-678',
                'anio_fabri' => 2017,
                'user_id' => 2,  // ID de usuario asociado
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Fiesta',
                'kilometraje' => 90000,
                'color' => 'Azul',
                'placa' => 'LMN-012',
                'anio_fabri' => 2018,
                'user_id' => 1,  // ID de usuario asociado
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Spark',
                'kilometraje' => 70000,
                'color' => 'Negro',
                'placa' => 'PQR-456',
                'anio_fabri' => 2020,
                'user_id' => 2,  // ID de usuario asociado
            ],
            // Puedes agregar más autos si lo deseas
        ];

        // Insertar los autos
        DB::table('autos')->insert($autos);
    }
}
