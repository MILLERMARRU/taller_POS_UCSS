<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clientes')->insert([
            ['nombre' => 'Diego',    'apellido' => 'Vargas Paredes',   'tipo_doc' => 'DNI', 'nro_doc' => '45123678', 'nro_tel_princ' => '987111001', 'nro_tel_sec' => null,        'email' => 'd.vargas@gmail.com',    'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Sandra',   'apellido' => 'Huerta Lima',      'tipo_doc' => 'DNI', 'nro_doc' => '72345019', 'nro_tel_princ' => '976222002', 'nro_tel_sec' => '014001234', 'email' => 's.huerta@hotmail.com',  'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Manuel',   'apellido' => 'Quispe Ramos',     'tipo_doc' => 'DNI', 'nro_doc' => '31456789', 'nro_tel_princ' => '965333003', 'nro_tel_sec' => null,        'email' => 'm.quispe@gmail.com',    'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Patricia', 'apellido' => 'Salinas Cruz',     'tipo_doc' => 'DNI', 'nro_doc' => '60234567', 'nro_tel_princ' => '954444004', 'nro_tel_sec' => null,        'email' => 'p.salinas@gmail.com',   'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ricardo',  'apellido' => 'Torres Mamani',    'tipo_doc' => 'DNI', 'nro_doc' => '25789012', 'nro_tel_princ' => '943555005', 'nro_tel_sec' => '016543210', 'email' => 'r.torres@outlook.com',  'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Lucía',    'apellido' => 'Medina Apaza',     'tipo_doc' => 'DNI', 'nro_doc' => '47890123', 'nro_tel_princ' => '932666006', 'nro_tel_sec' => null,        'email' => 'l.medina@gmail.com',    'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Andrés',   'apellido' => 'Chávez Llanos',    'tipo_doc' => 'DNI', 'nro_doc' => '58901234', 'nro_tel_princ' => '921777007', 'nro_tel_sec' => null,        'email' => 'a.chavez@gmail.com',    'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Mónica',   'apellido' => 'Rojas Tapia',      'tipo_doc' => 'DNI', 'nro_doc' => '69012345', 'nro_tel_princ' => '910888008', 'nro_tel_sec' => '015678901', 'email' => 'm.rojas@hotmail.com',   'estado' => 'inactivo', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Fernando', 'apellido' => 'Cano Bustamante',  'tipo_doc' => 'RUC', 'nro_doc' => '20123456789', 'nro_tel_princ' => '987999009', 'nro_tel_sec' => null,    'email' => 'f.cano@empresa.pe',     'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Valeria',  'apellido' => 'Núñez Soto',       'tipo_doc' => 'DNI', 'nro_doc' => '80123456', 'nro_tel_princ' => '976100010', 'nro_tel_sec' => null,        'email' => 'v.nunez@gmail.com',     'estado' => 'activo',   'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
