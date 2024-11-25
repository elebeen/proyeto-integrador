<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MantenimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = ['Electricidad', 'Mecanica', 'Planchado', 'General', 'Preventivo'];
        $servicio_tipos = ['normal', 'premium'];

        for ($i = 1; $i <= 200; $i++) {
            DB::table('mantenimientos')->insert([
                'motivo' => 'Descripcion del motivo de mantenimiento nro' . $i .' Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem earum sit maiores perferendis doloremque voluptatem molestias itaque non perspiciatis accusantium vel cum deleniti atque esse, libero, veniam voluptatibus quo totam?',
                'auto_ingresado' => rand(0, 1),
                'fecha_entrega_cliente' => now()->subDays(rand(1, 30)),
                'fecha_devol_cliente' => now()->addDays(rand(1, 30)),
                'estado' => rand(0, 1),
                'reparacion_terminada' => now()->subDays(rand(1, 15)),
                'auto_devuelto' => rand(0, 1),
                'servicio_tipo' => $servicio_tipos[array_rand($servicio_tipos)],
                'user_id' => rand(1, 5), // Asegúrate de tener usuarios en la tabla users
                'auto_id' => rand(1, 15), // Asegúrate de tener autos en la tabla autos
                'empleado_id' => rand(1, 5), // Asegúrate de tener empleados en la tabla empleados
                'categoria' => $categorias[array_rand($categorias)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
