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
            [
                'marca' => 'Peugeot',
                'modelo' => '208',
                'kilometraje' => 35000,
                'color' => 'Blanco',
                'placa' => 'PQW-234',
                'anio_fabri' => 2020,
                'user_id' => 4,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Santa Fe',
                'kilometraje' => 67000,
                'color' => 'Negro',
                'placa' => 'ZXC-567',
                'anio_fabri' => 2019,
                'user_id' => 3,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Aveo',
                'kilometraje' => 82000,
                'color' => 'Rojo',
                'placa' => 'RTE-890',
                'anio_fabri' => 2016,
                'user_id' => 5,
            ],
            [
                'marca' => 'Subaru',
                'modelo' => 'Outback',
                'kilometraje' => 45000,
                'color' => 'Azul',
                'placa' => 'BNM-456',
                'anio_fabri' => 2021,
                'user_id' => 2,
            ],
            [
                'marca' => 'Volvo',
                'modelo' => 'XC60',
                'kilometraje' => 54000,
                'color' => 'Gris',
                'placa' => 'VGH-789',
                'anio_fabri' => 2022,
                'user_id' => 3,
            ],
            [
                'marca' => 'Tesla',
                'modelo' => 'Model 3',
                'kilometraje' => 15000,
                'color' => 'Blanco',
                'placa' => 'ELE-123',
                'anio_fabri' => 2022,
                'user_id' => 4,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => '500',
                'kilometraje' => 37000,
                'color' => 'Amarillo',
                'placa' => 'FQR-345',
                'anio_fabri' => 2019,
                'user_id' => 1,
            ],
            [
                'marca' => 'Lexus',
                'modelo' => 'RX 350',
                'kilometraje' => 43000,
                'color' => 'Plateado',
                'placa' => 'TYU-567',
                'anio_fabri' => 2020,
                'user_id' => 2,
            ],
            [
                'marca' => 'Porsche',
                'modelo' => 'Cayenne',
                'kilometraje' => 12000,
                'color' => 'Negro',
                'placa' => 'LOP-890',
                'anio_fabri' => 2022,
                'user_id' => 5,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Sportage',
                'kilometraje' => 65000,
                'color' => 'Rojo',
                'placa' => 'JKI-345',
                'anio_fabri' => 2018,
                'user_id' => 4,
            ],
            [
                'marca' => 'Jeep',
                'modelo' => 'Compass',
                'kilometraje' => 41000,
                'color' => 'Verde',
                'placa' => 'QWE-123',
                'anio_fabri' => 2021,
                'user_id' => 3,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'CX-5',
                'kilometraje' => 56000,
                'color' => 'Blanco',
                'placa' => 'ASD-456',
                'anio_fabri' => 2019,
                'user_id' => 1,
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ranger',
                'kilometraje' => 75000,
                'color' => 'Azul',
                'placa' => 'ZXC-987',
                'anio_fabri' => 2018,
                'user_id' => 4,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Tahoe',
                'kilometraje' => 58000,
                'color' => 'Gris',
                'placa' => 'QAZ-345',
                'anio_fabri' => 2020,
                'user_id' => 5,
            ],
            [
                'marca' => 'Toyota',
                'modelo' => 'Hilux',
                'kilometraje' => 80000,
                'color' => 'Blanco',
                'placa' => 'WSD-567',
                'anio_fabri' => 2017,
                'user_id' => 3,
            ],
            [
                'marca' => 'BMW',
                'modelo' => '320i',
                'kilometraje' => 22000,
                'color' => 'Negro',
                'placa' => 'KLO-123',
                'anio_fabri' => 2022,
                'user_id' => 2,
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Pilot',
                'kilometraje' => 90000,
                'color' => 'Plateado',
                'placa' => 'HGF-789',
                'anio_fabri' => 2015,
                'user_id' => 4,
            ],
            [
                'marca' => 'Audi',
                'modelo' => 'Q7',
                'kilometraje' => 33000,
                'color' => 'Azul',
                'placa' => 'TRE-234',
                'anio_fabri' => 2021,
                'user_id' => 5,
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Passat',
                'kilometraje' => 71000,
                'color' => 'Blanco',
                'placa' => 'LOP-567',
                'anio_fabri' => 2018,
                'user_id' => 1,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Accent',
                'kilometraje' => 42000,
                'color' => 'Rojo',
                'placa' => 'MNB-234',
                'anio_fabri' => 2020,
                'user_id' => 2,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Soul',
                'kilometraje' => 65000,
                'color' => 'Negro',
                'placa' => 'POI-789',
                'anio_fabri' => 2019,
                'user_id' => 3,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => '6',
                'kilometraje' => 56000,
                'color' => 'Gris',
                'placa' => 'ABC-123',
                'anio_fabri' => 2017,
                'user_id' => 5,
            ],[
                'marca' => 'Peugeot',
                'modelo' => '208',
                'kilometraje' => 35000,
                'color' => 'Blanco',
                'placa' => 'PQW-234',
                'anio_fabri' => 2020,
                'user_id' => 4,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Santa Fe',
                'kilometraje' => 67000,
                'color' => 'Negro',
                'placa' => 'ZXC-567',
                'anio_fabri' => 2019,
                'user_id' => 3,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Aveo',
                'kilometraje' => 82000,
                'color' => 'Rojo',
                'placa' => 'RTE-890',
                'anio_fabri' => 2016,
                'user_id' => 5,
            ],
            [
                'marca' => 'Subaru',
                'modelo' => 'Outback',
                'kilometraje' => 45000,
                'color' => 'Azul',
                'placa' => 'BNM-456',
                'anio_fabri' => 2021,
                'user_id' => 2,
            ],
            [
                'marca' => 'Volvo',
                'modelo' => 'XC60',
                'kilometraje' => 54000,
                'color' => 'Gris',
                'placa' => 'VGH-789',
                'anio_fabri' => 2022,
                'user_id' => 3,
            ],
            [
                'marca' => 'Tesla',
                'modelo' => 'Model 3',
                'kilometraje' => 15000,
                'color' => 'Blanco',
                'placa' => 'ELE-123',
                'anio_fabri' => 2022,
                'user_id' => 4,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => '500',
                'kilometraje' => 37000,
                'color' => 'Amarillo',
                'placa' => 'FQR-345',
                'anio_fabri' => 2019,
                'user_id' => 1,
            ],
            [
                'marca' => 'Lexus',
                'modelo' => 'RX 350',
                'kilometraje' => 43000,
                'color' => 'Plateado',
                'placa' => 'TYU-567',
                'anio_fabri' => 2020,
                'user_id' => 2,
            ],
            [
                'marca' => 'Porsche',
                'modelo' => 'Cayenne',
                'kilometraje' => 12000,
                'color' => 'Negro',
                'placa' => 'LOP-890',
                'anio_fabri' => 2022,
                'user_id' => 5,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Sportage',
                'kilometraje' => 65000,
                'color' => 'Rojo',
                'placa' => 'JKI-345',
                'anio_fabri' => 2018,
                'user_id' => 4,
            ],
            [
                'marca' => 'Jeep',
                'modelo' => 'Compass',
                'kilometraje' => 41000,
                'color' => 'Verde',
                'placa' => 'QWE-123',
                'anio_fabri' => 2021,
                'user_id' => 3,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'CX-5',
                'kilometraje' => 56000,
                'color' => 'Blanco',
                'placa' => 'ASD-456',
                'anio_fabri' => 2019,
                'user_id' => 1,
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ranger',
                'kilometraje' => 75000,
                'color' => 'Azul',
                'placa' => 'ZXC-987',
                'anio_fabri' => 2018,
                'user_id' => 4,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Tahoe',
                'kilometraje' => 58000,
                'color' => 'Gris',
                'placa' => 'QAZ-345',
                'anio_fabri' => 2020,
                'user_id' => 5,
            ],
            [
                'marca' => 'Toyota',
                'modelo' => 'Hilux',
                'kilometraje' => 80000,
                'color' => 'Blanco',
                'placa' => 'WSD-567',
                'anio_fabri' => 2017,
                'user_id' => 3,
            ],
            [
                'marca' => 'BMW',
                'modelo' => '320i',
                'kilometraje' => 22000,
                'color' => 'Negro',
                'placa' => 'KLO-123',
                'anio_fabri' => 2022,
                'user_id' => 2,
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Pilot',
                'kilometraje' => 90000,
                'color' => 'Plateado',
                'placa' => 'HGF-789',
                'anio_fabri' => 2015,
                'user_id' => 4,
            ],
            [
                'marca' => 'Audi',
                'modelo' => 'Q7',
                'kilometraje' => 33000,
                'color' => 'Azul',
                'placa' => 'TRE-234',
                'anio_fabri' => 2021,
                'user_id' => 5,
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Passat',
                'kilometraje' => 71000,
                'color' => 'Blanco',
                'placa' => 'LOP-567',
                'anio_fabri' => 2018,
                'user_id' => 1,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Accent',
                'kilometraje' => 42000,
                'color' => 'Rojo',
                'placa' => 'MNB-234',
                'anio_fabri' => 2020,
                'user_id' => 2,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Soul',
                'kilometraje' => 65000,
                'color' => 'Negro',
                'placa' => 'POI-789',
                'anio_fabri' => 2019,
                'user_id' => 3,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => '6',
                'kilometraje' => 56000,
                'color' => 'Gris',
                'placa' => 'ABC-123',
                'anio_fabri' => 2017,
                'user_id' => 5,
            ],[
                'marca' => 'Peugeot',
                'modelo' => '208',
                'kilometraje' => 35000,
                'color' => 'Blanco',
                'placa' => 'PQW-234',
                'anio_fabri' => 2020,
                'user_id' => 4,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Santa Fe',
                'kilometraje' => 67000,
                'color' => 'Negro',
                'placa' => 'ZXC-567',
                'anio_fabri' => 2019,
                'user_id' => 3,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Aveo',
                'kilometraje' => 82000,
                'color' => 'Rojo',
                'placa' => 'RTE-890',
                'anio_fabri' => 2016,
                'user_id' => 5,
            ],
            [
                'marca' => 'Subaru',
                'modelo' => 'Outback',
                'kilometraje' => 45000,
                'color' => 'Azul',
                'placa' => 'BNM-456',
                'anio_fabri' => 2021,
                'user_id' => 2,
            ],
            [
                'marca' => 'Volvo',
                'modelo' => 'XC60',
                'kilometraje' => 54000,
                'color' => 'Gris',
                'placa' => 'VGH-789',
                'anio_fabri' => 2022,
                'user_id' => 3,
            ],
            [
                'marca' => 'Tesla',
                'modelo' => 'Model 3',
                'kilometraje' => 15000,
                'color' => 'Blanco',
                'placa' => 'ELE-123',
                'anio_fabri' => 2022,
                'user_id' => 4,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => '500',
                'kilometraje' => 37000,
                'color' => 'Amarillo',
                'placa' => 'FQR-345',
                'anio_fabri' => 2019,
                'user_id' => 1,
            ],
            [
                'marca' => 'Lexus',
                'modelo' => 'RX 350',
                'kilometraje' => 43000,
                'color' => 'Plateado',
                'placa' => 'TYU-567',
                'anio_fabri' => 2020,
                'user_id' => 2,
            ],
            [
                'marca' => 'Porsche',
                'modelo' => 'Cayenne',
                'kilometraje' => 12000,
                'color' => 'Negro',
                'placa' => 'LOP-890',
                'anio_fabri' => 2022,
                'user_id' => 5,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Sportage',
                'kilometraje' => 65000,
                'color' => 'Rojo',
                'placa' => 'JKI-345',
                'anio_fabri' => 2018,
                'user_id' => 4,
            ],
            [
                'marca' => 'Jeep',
                'modelo' => 'Compass',
                'kilometraje' => 41000,
                'color' => 'Verde',
                'placa' => 'QWE-123',
                'anio_fabri' => 2021,
                'user_id' => 3,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'CX-5',
                'kilometraje' => 56000,
                'color' => 'Blanco',
                'placa' => 'ASD-456',
                'anio_fabri' => 2019,
                'user_id' => 1,
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ranger',
                'kilometraje' => 75000,
                'color' => 'Azul',
                'placa' => 'ZXC-987',
                'anio_fabri' => 2018,
                'user_id' => 4,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Tahoe',
                'kilometraje' => 58000,
                'color' => 'Gris',
                'placa' => 'QAZ-345',
                'anio_fabri' => 2020,
                'user_id' => 5,
            ],
            [
                'marca' => 'Toyota',
                'modelo' => 'Hilux',
                'kilometraje' => 80000,
                'color' => 'Blanco',
                'placa' => 'WSD-567',
                'anio_fabri' => 2017,
                'user_id' => 3,
            ],
            [
                'marca' => 'BMW',
                'modelo' => '320i',
                'kilometraje' => 22000,
                'color' => 'Negro',
                'placa' => 'KLO-123',
                'anio_fabri' => 2022,
                'user_id' => 2,
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Pilot',
                'kilometraje' => 90000,
                'color' => 'Plateado',
                'placa' => 'HGF-789',
                'anio_fabri' => 2015,
                'user_id' => 4,
            ],
            [
                'marca' => 'Audi',
                'modelo' => 'Q7',
                'kilometraje' => 33000,
                'color' => 'Azul',
                'placa' => 'TRE-234',
                'anio_fabri' => 2021,
                'user_id' => 5,
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Passat',
                'kilometraje' => 71000,
                'color' => 'Blanco',
                'placa' => 'LOP-567',
                'anio_fabri' => 2018,
                'user_id' => 1,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Accent',
                'kilometraje' => 42000,
                'color' => 'Rojo',
                'placa' => 'MNB-234',
                'anio_fabri' => 2020,
                'user_id' => 2,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Soul',
                'kilometraje' => 65000,
                'color' => 'Negro',
                'placa' => 'POI-789',
                'anio_fabri' => 2019,
                'user_id' => 3,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => '6',
                'kilometraje' => 56000,
                'color' => 'Gris',
                'placa' => 'ABC-123',
                'anio_fabri' => 2017,
                'user_id' => 5,
            ],
            // Puedes agregar más autos si lo deseas
        ];

        // Insertar los autos
        DB::table('autos')->insert($autos);
    }
}
