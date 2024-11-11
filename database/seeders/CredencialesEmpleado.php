<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CredencialEmpleado;
use Illuminate\Support\Facades\Hash;

class CredencialesEmpleado extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CredencialEmpleado::create([
            'id' => 1,
            'usuario' => 'empleado1',
            'password' => Hash::make('Tecsup2024'),
        ]);
    }
}
