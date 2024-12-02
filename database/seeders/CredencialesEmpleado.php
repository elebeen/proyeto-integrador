<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CredencialesEmpleado extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $credenciales = [
            [
                'id' => 1,
                'usuario' => 'empleado1',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 1,
            ],
            [
                'id' => 2,
                'usuario' => 'empleado2',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 2,
            ],
            [
                'id' => 3,
                'usuario' => 'empleado3',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 3,
            ],
            [
                'id' => 4,
                'usuario' => 'empleado4',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 4,
            ],
            [
                'id' => 5,
                'usuario' => 'empleado5',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 5,
            ],
            [
                'id' => 1,
                'usuario' => 'empleado',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 6,
            ],
            [
                'id' => 2,
                'usuario' => 'empleado7',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 7,
            ],
            [
                'id' => 3,
                'usuario' => 'empleado8',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 8,
            ],
            [
                'id' => 4,
                'usuario' => 'empleado9',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 9,
            ],
            [
                'id' => 5,
                'usuario' => 'empleado10',
                'password' => Hash::make('Tecsup2024'),
                'empleado_id' => 10,
            ],
        ];

        DB::table('credencial_empleados')->insert($credenciales);
    }
}
