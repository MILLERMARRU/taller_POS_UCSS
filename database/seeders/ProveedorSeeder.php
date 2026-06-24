<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('proveedores')->insert([
            [
                'ruc'             => '20501234567',
                'razon_social'    => 'Distribuidora Central S.A.C.',
                'nombre_comercial'=> 'DistroCentral',
                'contacto'        => 'Roberto Salinas',
                'telefono'        => '016234567',
                'celular'         => '987001122',
                'email'           => 'ventas@distrocentral.com',
                'direccion'       => 'Av. Industrial 1200',
                'departamento'    => 'Lima',
                'provincia'       => 'Lima',
                'distrito'        => 'Ate',
                'estado'          => 'activo',
                'observaciones'   => 'Proveedor principal de electrónicos',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'ruc'             => '20601234568',
                'razon_social'    => 'Alimentos del Sur E.I.R.L.',
                'nombre_comercial'=> 'AlimSur',
                'contacto'        => 'Patricia Villanueva',
                'telefono'        => '054321456',
                'celular'         => '976002233',
                'email'           => 'contacto@alimsur.com',
                'direccion'       => 'Jr. Comercio 456',
                'departamento'    => 'Arequipa',
                'provincia'       => 'Arequipa',
                'distrito'        => 'Cayma',
                'estado'          => 'activo',
                'observaciones'   => 'Proveedor de alimentos y bebidas',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'ruc'             => '20701234569',
                'razon_social'    => 'Productos de Limpieza Lima S.A.',
                'nombre_comercial'=> 'LimpiaLima',
                'contacto'        => 'Héctor Montoya',
                'telefono'        => '015123789',
                'celular'         => '965003344',
                'email'           => 'h.montoya@limpialima.pe',
                'direccion'       => 'Calle Los Talleres 89',
                'departamento'    => 'Lima',
                'provincia'       => 'Lima',
                'distrito'        => 'San Juan de Lurigancho',
                'estado'          => 'activo',
                'observaciones'   => null,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'ruc'             => '20801234560',
                'razon_social'    => 'Textiles Andinos S.R.L.',
                'nombre_comercial'=> 'TextAndes',
                'contacto'        => 'Claudia Ríos',
                'telefono'        => '084567890',
                'celular'         => '954004455',
                'email'           => 'c.rios@textandes.com',
                'direccion'       => 'Av. Ejército 345',
                'departamento'    => 'Cusco',
                'provincia'       => 'Cusco',
                'distrito'        => 'Wanchaq',
                'estado'          => 'activo',
                'observaciones'   => 'Proveedor de ropa y telas',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'ruc'             => '20901234561',
                'razon_social'    => 'Papelería y Útiles Corp.',
                'nombre_comercial'=> 'PapelCorp',
                'contacto'        => 'Fernando Castro',
                'telefono'        => '017891234',
                'celular'         => '943005566',
                'email'           => 'ventas@papelcorp.pe',
                'direccion'       => 'Jr. Ucayali 678',
                'departamento'    => 'Lima',
                'provincia'       => 'Lima',
                'distrito'        => 'Lima',
                'estado'          => 'inactivo',
                'observaciones'   => 'Temporalmente suspendido',
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
        ]);
    }
}
