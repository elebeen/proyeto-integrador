<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        #$this->call(UserSeeder::class);
        #$this->call(RoleSeeder::class);
        #$this->call(AutosSeeder::class);
        #$this->call(EmpleadoSeeder::class);
        #$this->call(MantenimientosSeeder::class);
        #$this->call(ReparacionesSeeder::class);
        #$this->call(RepuestosSeeder::class);
        #$this->call(ReparacionRepuestosTableSeeder::class);
        $this->call(CredencialesEmpleado::class);
    }
}
