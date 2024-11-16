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
        $reparaciones = [
            [
                'mantenimiento_id' => 2,
                'descripcion' => 'Cambio de frenos y revisión de motor',
            ],
            [
                'mantenimiento_id' => 3,
                'descripcion' => 'Cambio de aceite y filtro',
            ],
            [
                'mantenimiento_id' => 4,
                'descripcion' => 'Reemplazo de amortiguadores y revisión de suspensión',
            ],
            [
                'mantenimiento_id' => 5,
                'descripcion' => 'Chequeo general del vehículo y cambio de bujías',
            ],
        ];

        // Insertar los registros en la tabla
        foreach ($reparaciones as &$data) {
            $data['created_at'] = now();
            $data['updated_at'] = now();
        }

        DB::table('reparaciones')->insert($reparaciones);
    }
}
