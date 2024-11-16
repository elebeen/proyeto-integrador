<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para insertar nuevos usuarios
        $users = [
            [
                'name' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'apellido' => 'Pérez',
                'fecha_nac' => '1990-05-12',
                'telefono' => '1234567890',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Encriptar contraseña
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maria González',
                'email' => 'maria.gonzalez@example.com',
                'apellido' => 'González',
                'fecha_nac' => '1985-11-25',
                'telefono' => '0987654321',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Encriptar contraseña
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos Díaz',
                'email' => 'carlos.diaz@example.com',
                'apellido' => 'Díaz',
                'fecha_nac' => '1992-07-19',
                'telefono' => '1122334455',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Encriptar contraseña
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Puedes agregar más usuarios si lo deseas
        ];

        // Insertar los usuarios
        DB::table('users')->insert($users);
    }
}
