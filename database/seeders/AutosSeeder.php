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
                'user_id' => 3,  // ID de usuario asociado
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Spark',
                'kilometraje' => 70000,
                'color' => 'Negro',
                'placa' => 'PQR-456',
                'anio_fabri' => 2020,
                'user_id' => 4,  // ID de usuario asociado
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
                'user_id' => 5,
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'kilometraje' => 32000,
                'color' => 'Rojo',
                'placa' => 'DEF-789',
                'anio_fabri' => 2019,
                'user_id' => 6,
            ],
            [
                'marca' => 'Nissan',
                'modelo' => 'Sentra',
                'kilometraje' => 55000,
                'color' => 'Gris',
                'placa' => 'GHI-012',
                'anio_fabri' => 2020,
                'user_id' => 7,
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Jetta',
                'kilometraje' => 28000,
                'color' => 'Azul',
                'placa' => 'JKL-345',
                'anio_fabri' => 2022,
                'user_id' => 8,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Elantra',
                'kilometraje' => 62000,
                'color' => 'Plateado',
                'placa' => 'MNO-678',
                'anio_fabri' => 2019,
                'user_id' => 9,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Rio',
                'kilometraje' => 41000,
                'color' => 'Verde',
                'placa' => 'STU-901',
                'anio_fabri' => 2021,
                'user_id' => 10,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'Mazda3',
                'kilometraje' => 38000,
                'color' => 'Rojo',
                'placa' => 'VWX-234',
                'anio_fabri' => 2020,
                'user_id' => 11,
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Focus',
                'kilometraje' => 51000,
                'color' => 'Negro',
                'placa' => 'YZA-567',
                'anio_fabri' => 2019,
                'user_id' => 12,
            ],
            [
                'marca' => 'Suzuki',
                'modelo' => 'Swift',
                'kilometraje' => 25000,
                'color' => 'Blanco',
                'placa' => 'BCD-890',
                'anio_fabri' => 2022,
                'user_id' => 13,
            ],
            [
                'marca' => 'Renault',
                'modelo' => 'Logan',
                'kilometraje' => 48000,
                'color' => 'Gris',
                'placa' => 'EFG-123',
                'anio_fabri' => 2021,
                'user_id' => 14,
            ],
            [
                'marca' => 'Peugeot',
                'modelo' => '208',
                'kilometraje' => 35000,
                'color' => 'Blanco',
                'placa' => 'PQW-234',
                'anio_fabri' => 2020,
                'user_id' => 15,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Santa Fe',
                'kilometraje' => 67000,
                'color' => 'Negro',
                'placa' => '34d-567',
                'anio_fabri' => 2019,
                'user_id' => 1,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Aveo',
                'kilometraje' => 82000,
                'color' => 'Rojo',
                'placa' => 'RTE-8c4',
                'anio_fabri' => 2016,
                'user_id' => 2,
            ],
            [
                'marca' => 'Subaru',
                'modelo' => 'Outback',
                'kilometraje' => 45000,
                'color' => 'Azul',
                'placa' => 'frv-458',
                'anio_fabri' => 2021,
                'user_id' => 3,
            ],
            [
                'marca' => 'Volvo',
                'modelo' => 'XC60',
                'kilometraje' => 54000,
                'color' => 'Gris',
                'placa' => 'deg-f90',
                'anio_fabri' => 2022,
                'user_id' => 4,
            ],
            [
                'marca' => 'Tesla',
                'modelo' => 'Model 3',
                'kilometraje' => 15000,
                'color' => 'Blanco',
                'placa' => 'kil-524',
                'anio_fabri' => 2022,
                'user_id' => 5,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => '500',
                'kilometraje' => 37000,
                'color' => 'Amarillo',
                'placa' => 'FQR-lo8',
                'anio_fabri' => 2019,
                'user_id' => 6,
            ],
            [
                'marca' => 'Lexus',
                'modelo' => 'RX 350',
                'kilometraje' => 43000,
                'color' => 'Plateado',
                'placa' => 'lom-567',
                'anio_fabri' => 2020,
                'user_id' => 7,
            ],
            [
                'marca' => 'Porsche',
                'modelo' => 'Cayenne',
                'kilometraje' => 12000,
                'color' => 'Negro',
                'placa' => 'fer-890',
                'anio_fabri' => 2022,
                'user_id' => 8,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Sportage',
                'kilometraje' => 65000,
                'color' => 'Rojo',
                'placa' => 'JKI-345',
                'anio_fabri' => 2018,
                'user_id' => 9,
            ],
            [
                'marca' => 'Jeep',
                'modelo' => 'Compass',
                'kilometraje' => 41000,
                'color' => 'Verde',
                'placa' => 'loc-324',
                'anio_fabri' => 2021,
                'user_id' => 10,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'CX-5',
                'kilometraje' => 56000,
                'color' => 'Blanco',
                'placa' => '475-vft',
                'anio_fabri' => 2019,
                'user_id' => 11,
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ranger',
                'kilometraje' => 75000,
                'color' => 'Azul',
                'placa' => 'ZXC-987',
                'anio_fabri' => 2018,
                'user_id' => 12,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Tahoe',
                'kilometraje' => 58000,
                'color' => 'Gris',
                'placa' => '5f5-gv1',
                'anio_fabri' => 2020,
                'user_id' => 13,
            ],
            [
                'marca' => 'Toyota',
                'modelo' => 'Hilux',
                'kilometraje' => 80000,
                'color' => 'Blanco',
                'placa' => 'rft-ers',
                'anio_fabri' => 2017,
                'user_id' => 14,
            ],
            [
                'marca' => 'BMW',
                'modelo' => '320i',
                'kilometraje' => 22000,
                'color' => 'Negro',
                'placa' => 'KLO-123',
                'anio_fabri' => 2022,
                'user_id' => 15,
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Pilot',
                'kilometraje' => 90000,
                'color' => 'Plateado',
                'placa' => 'vfr-lok',
                'anio_fabri' => 2015,
                'user_id' => 1,
            ],
            [
                'marca' => 'Audi',
                'modelo' => 'Q7',
                'kilometraje' => 33000,
                'color' => 'Azul',
                'placa' => 'pol-4r5',
                'anio_fabri' => 2021,
                'user_id' => 2,
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Passat',
                'kilometraje' => 71000,
                'color' => 'Blanco',
                'placa' => 'LOP-567',
                'anio_fabri' => 2018,
                'user_id' => 3,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Accent',
                'kilometraje' => 42000,
                'color' => 'Rojo',
                'placa' => '785-ght',
                'anio_fabri' => 2020,
                'user_id' => 4,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Soul',
                'kilometraje' => 65000,
                'color' => 'Negro',
                'placa' => 'ftgt-908',
                'anio_fabri' => 2019,
                'user_id' => 5,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => '6',
                'kilometraje' => 56000,
                'color' => 'Gris',
                'placa' => 'saw-123',
                'anio_fabri' => 2017,
                'user_id' => 6,
            ],
            [
                'marca' => 'Peugeot',
                'modelo' => '208',
                'kilometraje' => 35000,
                'color' => 'Blanco',
                'placa' => 'Pwd-234',
                'anio_fabri' => 2020,
                'user_id' => 7,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Santa Fe',
                'kilometraje' => 67000,
                'color' => 'Negro',
                'placa' => 'era-5r4',
                'anio_fabri' => 2019,
                'user_id' => 8,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Aveo',
                'kilometraje' => 82000,
                'color' => 'Rojo',
                'placa' => 'RTE-890',
                'anio_fabri' => 2016,
                'user_id' => 9,
            ],
            [
                'marca' => 'Subaru',
                'modelo' => 'Outback',
                'kilometraje' => 45000,
                'color' => 'Azul',
                'placa' => 'BNM-456',
                'anio_fabri' => 2021,
                'user_id' => 10,
            ],
            [
                'marca' => 'Volvo',
                'modelo' => 'XC60',
                'kilometraje' => 54000,
                'color' => 'Gris',
                'placa' => 'VGH-789',
                'anio_fabri' => 2022,
                'user_id' => 11,
            ],
            [
                'marca' => 'Tesla',
                'modelo' => 'Model 3',
                'kilometraje' => 15000,
                'color' => 'Blanco',
                'placa' => 'rfd-143',
                'anio_fabri' => 2022,
                'user_id' => 12,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => '500',
                'kilometraje' => 37000,
                'color' => 'Amarillo',
                'placa' => 'Fyt-335',
                'anio_fabri' => 2019,
                'user_id' => 13,
            ],
            [
                'marca' => 'Lexus',
                'modelo' => 'RX 350',
                'kilometraje' => 43000,
                'color' => 'Plateado',
                'placa' => '582-grt',
                'anio_fabri' => 2020,
                'user_id' => 14,
            ],
            [
                'marca' => 'Porsche',
                'modelo' => 'Cayenne',
                'kilometraje' => 12000,
                'color' => 'Negro',
                'placa' => 'nju-45r',
                'anio_fabri' => 2022,
                'user_id' => 15,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Sportage',
                'kilometraje' => 65000,
                'color' => 'Rojo',
                'placa' => 'jur-45f',
                'anio_fabri' => 2018,
                'user_id' => 1,
            ],
            [
                'marca' => 'Jeep',
                'modelo' => 'Compass',
                'kilometraje' => 41000,
                'color' => 'Verde',
                'placa' => 'QWE-123',
                'anio_fabri' => 2021,
                'user_id' => 2,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'CX-5',
                'kilometraje' => 56000,
                'color' => 'Blanco',
                'placa' => 'ASD-456',
                'anio_fabri' => 2019,
                'user_id' => 3,
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ranger',
                'kilometraje' => 75000,
                'color' => 'Azul',
                'placa' => 'edr-564',
                'anio_fabri' => 2018,
                'user_id' => 4,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Tahoe',
                'kilometraje' => 58000,
                'color' => 'Gris',
                'placa' => 'kil-564',
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
                'user_id' => 6,
            ],
            [
                'marca' => 'BMW',
                'modelo' => '320i',
                'kilometraje' => 22000,
                'color' => 'Negro',
                'placa' => 'kil-45r',
                'anio_fabri' => 2022,
                'user_id' => 8,
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Pilot',
                'kilometraje' => 90000,
                'color' => 'Plateado',
                'placa' => '486-cfd',
                'anio_fabri' => 2015,
                'user_id' => 10,
            ],
            [
                'marca' => 'Audi',
                'modelo' => 'Q7',
                'kilometraje' => 33000,
                'color' => 'Azul',
                'placa' => 'TRE-234',
                'anio_fabri' => 2021,
                'user_id' => 11,
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Passat',
                'kilometraje' => 71000,
                'color' => 'Blanco',
                'placa' => 'fvg-0l9',
                'anio_fabri' => 2018,
                'user_id' => 12,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Accent',
                'kilometraje' => 42000,
                'color' => 'Rojo',
                'placa' => 'drf-456',
                'anio_fabri' => 2020,
                'user_id' => 13,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Soul',
                'kilometraje' => 65000,
                'color' => 'Negro',
                'placa' => 'POI-789',
                'anio_fabri' => 2019,
                'user_id' => 14,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => '6',
                'kilometraje' => 56000,
                'color' => 'Gris',
                'placa' => 'ABC-d47',
                'anio_fabri' => 2017,
                'user_id' => 15,
            ],
            [
                'marca' => 'Peugeot',
                'modelo' => '208',
                'kilometraje' => 35000,
                'color' => 'Blanco',
                'placa' => 'PQW-d34',
                'anio_fabri' => 2020,
                'user_id' => 1,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Santa Fe',
                'kilometraje' => 67000,
                'color' => 'Negro',
                'placa' => 'ZXC-567',
                'anio_fabri' => 2019,
                'user_id' => 2,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Aveo',
                'kilometraje' => 82000,
                'color' => 'Rojo',
                'placa' => 'Rrf-890',
                'anio_fabri' => 2016,
                'user_id' => 3,
            ],
            [
                'marca' => 'Subaru',
                'modelo' => 'Outback',
                'kilometraje' => 45000,
                'color' => 'Azul',
                'placa' => 'Bfd-456',
                'anio_fabri' => 2021,
                'user_id' => 4,
            ],
            [
                'marca' => 'Volvo',
                'modelo' => 'XC60',
                'kilometraje' => 54000,
                'color' => 'Gris',
                'placa' => 'bty-789',
                'anio_fabri' => 2022,
                'user_id' => 5,
            ],
            [
                'marca' => 'Tesla',
                'modelo' => 'Model 3',
                'kilometraje' => 15000,
                'color' => 'Blanco',
                'placa' => 'ELE-123',
                'anio_fabri' => 2022,
                'user_id' => 6,
            ],
            [
                'marca' => 'Fiat',
                'modelo' => '500',
                'kilometraje' => 37000,
                'color' => 'Amarillo',
                'placa' => 'FQR-345',
                'anio_fabri' => 2019,
                'user_id' => 7,
            ],
            [
                'marca' => 'Lexus',
                'modelo' => 'RX 350',
                'kilometraje' => 43000,
                'color' => 'Plateado',
                'placa' => 'TYU-567',
                'anio_fabri' => 2020,
                'user_id' => 8,
            ],
            [
                'marca' => 'Porsche',
                'modelo' => 'Cayenne',
                'kilometraje' => 12000,
                'color' => 'Negro',
                'placa' => 'LOP-890',
                'anio_fabri' => 2022,
                'user_id' => 9,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Sportage',
                'kilometraje' => 65000,
                'color' => 'Rojo',
                'placa' => 'lom-45t',
                'anio_fabri' => 2018,
                'user_id' => 10,
            ],
            [
                'marca' => 'Jeep',
                'modelo' => 'Compass',
                'kilometraje' => 41000,
                'color' => 'Verde',
                'placa' => 'gor-4r5',
                'anio_fabri' => 2021,
                'user_id' => 11,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => 'CX-5',
                'kilometraje' => 56000,
                'color' => 'Blanco',
                'placa' => 'Aws-456',
                'anio_fabri' => 2019,
                'user_id' => 12,
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ranger',
                'kilometraje' => 75000,
                'color' => 'Azul',
                'placa' => 'frt-56t',
                'anio_fabri' => 2018,
                'user_id' => 13,
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Tahoe',
                'kilometraje' => 58000,
                'color' => 'Gris',
                'placa' => 'QAZ-345',
                'anio_fabri' => 2020,
                'user_id' => 14,
            ],
            [
                'marca' => 'Toyota',
                'modelo' => 'Hilux',
                'kilometraje' => 80000,
                'color' => 'Blanco',
                'placa' => 'kif-325',
                'anio_fabri' => 2017,
                'user_id' => 15,
            ],
            [
                'marca' => 'BMW',
                'modelo' => '320i',
                'kilometraje' => 22000,
                'color' => 'Negro',
                'placa' => 'frt-23e',
                'anio_fabri' => 2022,
                'user_id' => 1,
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Pilot',
                'kilometraje' => 90000,
                'color' => 'Plateado',
                'placa' => 'HGF-789',
                'anio_fabri' => 2015,
                'user_id' => 2,
            ],
            [
                'marca' => 'Audi',
                'modelo' => 'Q7',
                'kilometraje' => 33000,
                'color' => 'Azul',
                'placa' => 'dcf-456',
                'anio_fabri' => 2021,
                'user_id' => 3,
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Passat',
                'kilometraje' => 71000,
                'color' => 'Blanco',
                'placa' => 'hjk-854',
                'anio_fabri' => 2018,
                'user_id' => 4,
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'Accent',
                'kilometraje' => 42000,
                'color' => 'Rojo',
                'placa' => 'MNB-234',
                'anio_fabri' => 2020,
                'user_id' => 5,
            ],
            [
                'marca' => 'Kia',
                'modelo' => 'Soul',
                'kilometraje' => 65000,
                'color' => 'Negro',
                'placa' => 'jul-45r',
                'anio_fabri' => 2019,
                'user_id' => 6,
            ],
            [
                'marca' => 'Mazda',
                'modelo' => '6',
                'kilometraje' => 56000,
                'color' => 'Gris',
                'placa' => 'ABC-342',
                'anio_fabri' => 2017,
                'user_id' => 7,
            ],
            // Puedes agregar más autos si lo deseas
        ];

        // Insertar los autos
        DB::table('autos')->insert($autos);
    }
}
