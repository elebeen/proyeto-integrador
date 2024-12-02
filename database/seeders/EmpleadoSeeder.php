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
                'telefono' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María',
                'apellido' => 'Gómez',
                'correo' => 'maria.gomez@example.com',
                'fecha_nac' => '1985-09-23',
                'telefono' => '098765432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'López',
                'correo' => 'carlos.lopez@example.com',
                'fecha_nac' => '1993-02-17',
                'telefono' => '112233445',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Martínez',
                'correo' => 'ana.martinez@example.com',
                'fecha_nac' => '1995-08-30',
                'telefono' => '667788990',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Diego',
                'apellido' => 'Colca',
                'correo' => 'diego.colca@example.com',
                'fecha_nac' => '2002-09-04',
                'telefono' => '856932147',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Joel',
                'apellido' => 'Huamani',
                'correo' => 'joel.huamani@example.com',
                'fecha_nac' => '1990-05-12',
                'telefono' => '123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Omar',
                'apellido' => 'Choque',
                'correo' => 'omar.choque@example.com',
                'fecha_nac' => '1985-09-23',
                'telefono' => '098765432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Andy',
                'apellido' => 'López',
                'correo' => 'Andy.lopez@example.com',
                'fecha_nac' => '1993-02-17',
                'telefono' => '112233445',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Diana',
                'apellido' => 'Guadalupe',
                'correo' => 'diana.guadalupe@example.com',
                'fecha_nac' => '1995-08-30',
                'telefono' => '667788990',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Kevin',
                'apellido' => 'Roy',
                'correo' => 'kevin.roy@example.com',
                'fecha_nac' => '2002-09-04',
                'telefono' => '856932147',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insertar los empleados
        DB::table('empleados')->insert($empleados);
    }
}
