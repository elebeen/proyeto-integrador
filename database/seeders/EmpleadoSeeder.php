<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empleados = [
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'correo' => 'juan.perez@example.com',
                'fecha_nac' => '1990-05-12',
                'telefono' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María',
                'apellido' => 'Gómez',
                'correo' => 'maria.gomez@example.com',
                'fecha_nac' => '1985-09-23',
                'telefono' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'López',
                'correo' => 'carlos.lopez@example.com',
                'fecha_nac' => '1993-02-17',
                'telefono' => '1122334455',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Martínez',
                'correo' => 'ana.martinez@example.com',
                'fecha_nac' => '1995-08-30',
                'telefono' => '6677889900',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insertar los empleados
        DB::table('empleados')->insert($empleados);
    }
}
