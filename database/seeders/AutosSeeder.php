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
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Spark',
                'kilometraje' => 70000,
                'color' => 'Negro',
                'placa' => 'tgy-456',
                'anio_fabri' => 2020,
                'user_id' => 2,
            ],
            [
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'kilometraje' => 45000,
                'color' => 'Blanco',
                'placa' => 'ABC-123',
                'anio_fabri' => 2021,
                'user_id' => 3,
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'kilometraje' => 32000,
                'color' => 'Rojo',
                'placa' => 'DEF-789',
                'anio_fabri' => 2019,
                'user_id' => 1,
            ],
            [
                'marca' => 'Nissan',
                'modelo' => 'Sentra',
                'kilometraje' => 55000,
                'color' => 'Gris',
                'placa' => 'GHI-012',
                'anio_fabri' => 2020,
                'user_id' => 4,
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Jetta',
                'kilometraje' => 28000,
                'color' => 'Azul',
                'placa' => 'JKL-345',
                'anio_fabri' => 2022,
                'user_id' => 5,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Elantra',
                'kilometraje' => 62000,
                'color' => 'Plateado',
                'placa' => 'MNO-678',
                'anio_fabri' => 2019,
                'user_id' => 2,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Rio',
                'kilometraje' => 41000,
                'color' => 'Verde',
                'placa' => 'STU-901',
                'anio_fabri' => 2021,
                'user_id' => 1,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'Mazda3',
                'kilometraje' => 38000,
                'color' => 'Rojo',
                'placa' => 'VWX-234',
                'anio_fabri' => 2020,
                'user_id' => 4,
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Focus',
                'kilometraje' => 51000,
                'color' => 'Negro',
                'placa' => 'YZA-567',
                'anio_fabri' => 2019,
                'user_id' => 3,
            ],
            [
                'marca' => 'Suzuki',
                'modelo' => 'Swift',
                'kilometraje' => 25000,
                'color' => 'Blanco',
                'placa' => 'BCD-890',
                'anio_fabri' => 2022,
                'user_id' => 5,
            ],
            [
                'marca' => 'Renault',
                'modelo' => 'Logan',
                'kilometraje' => 48000,
                'color' => 'Gris',
                'placa' => 'EFG-123',
                'anio_fabri' => 2021,
                'user_id' => 2,
            ],
            // Puedes agregar más autos si lo deseas
        ];

        // Insertar los autos
        DB::table('autos')->insert($autos);
    }
}
