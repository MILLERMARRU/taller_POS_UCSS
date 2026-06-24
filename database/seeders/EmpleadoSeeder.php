<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('empleados')->insert([
            [
                'nombre'        => 'Carlos',
                'apellido'      => 'Ramírez Torres',
                'fecha_nac'     => '1990-03-15',
                'tipo_doc'      => 'DNI',
                'nro_doc'       => '45231876',
                'direccion'     => 'Av. Los Pinos 345, Lima',
                'nro_tel_princ' => '987654321',
                'nro_tel_sec'   => '014521230',
                'email'         => 'c.ramirez@empresa.com',
                'cargo'         => 'Vendedor',
                'fecha_ingreso' => '2023-01-10',
                'salario_anual' => 18000.00,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'nombre'        => 'Ana',
                'apellido'      => 'Flores Quispe',
                'fecha_nac'     => '1995-07-22',
                'tipo_doc'      => 'DNI',
                'nro_doc'       => '72341098',
                'direccion'     => 'Jr. Las Rosas 120, Miraflores',
                'nro_tel_princ' => '976543210',
                'nro_tel_sec'   => null,
                'email'         => 'a.flores@empresa.com',
                'cargo'         => 'Cajera',
                'fecha_ingreso' => '2023-04-01',
                'salario_anual' => 16800.00,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'nombre'        => 'Luis',
                'apellido'      => 'Mendoza Vega',
                'fecha_nac'     => '1988-11-05',
                'tipo_doc'      => 'DNI',
                'nro_doc'       => '31245678',
                'direccion'     => 'Calle Sol 890, San Isidro',
                'nro_tel_princ' => '965432187',
                'nro_tel_sec'   => '016789012',
                'email'         => 'l.mendoza@empresa.com',
                'cargo'         => 'Almacenero',
                'fecha_ingreso' => '2022-09-15',
                'salario_anual' => 15600.00,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'nombre'        => 'María',
                'apellido'      => 'García López',
                'fecha_nac'     => '1992-02-28',
                'tipo_doc'      => 'DNI',
                'nro_doc'       => '60987321',
                'direccion'     => 'Av. Arequipa 567, Lince',
                'nro_tel_princ' => '954321098',
                'nro_tel_sec'   => null,
                'email'         => 'm.garcia@empresa.com',
                'cargo'         => 'Supervisora',
                'fecha_ingreso' => '2021-06-01',
                'salario_anual' => 24000.00,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'nombre'        => 'Jorge',
                'apellido'      => 'Pérez Huanca',
                'fecha_nac'     => '1985-09-12',
                'tipo_doc'      => 'DNI',
                'nro_doc'       => '25678943',
                'direccion'     => 'Jr. Tacna 234, Cercado',
                'nro_tel_princ' => '943210987',
                'nro_tel_sec'   => '011234567',
                'email'         => 'j.perez@empresa.com',
                'cargo'         => 'Gerente',
                'fecha_ingreso' => '2020-01-05',
                'salario_anual' => 36000.00,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
