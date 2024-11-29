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

        $users = [
            [
                'name' => 'Juan',
                'email' => 'juan.perez@example.com',
                'apellido' => 'Pérez',
                'fecha_nac' => '1990-05-12',
                'telefono' => '1234567890',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), 
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maria',
                'email' => 'maria.gonzalez@example.com',
                'apellido' => 'González',
                'fecha_nac' => '1985-11-25',
                'telefono' => '0987654321',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), 
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos',
                'email' => 'carlos.diaz@example.com',
                'apellido' => 'Díaz',
                'fecha_nac' => '1992-07-19',
                'telefono' => '1122334455',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), 
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Joel',
                'email' => 'joel.zeballos@example.com',
                'apellido' => 'Zeballos',
                'fecha_nac' => '2000-05-20',
                'telefono' => '986352147',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), 
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Henry',
                'email' => 'henry.mamani@example.com',
                'apellido' => 'Mamani',
                'fecha_nac' => '1999-08-31',
                'telefono' => '365278952',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), 
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        DB::table('users')->insert($users);
    }
}
