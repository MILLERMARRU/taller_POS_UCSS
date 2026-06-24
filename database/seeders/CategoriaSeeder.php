<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Electrónicos',    'descripcion' => 'Equipos y accesorios electrónicos',          'estado' => 'activo'],
            ['nombre' => 'Alimentos',       'descripcion' => 'Productos alimenticios en general',           'estado' => 'activo'],
            ['nombre' => 'Bebidas',         'descripcion' => 'Bebidas alcohólicas y no alcohólicas',        'estado' => 'activo'],
            ['nombre' => 'Limpieza',        'descripcion' => 'Productos de limpieza e higiene',             'estado' => 'activo'],
            ['nombre' => 'Oficina',         'descripcion' => 'Útiles y materiales de oficina',              'estado' => 'activo'],
            ['nombre' => 'Ropa',            'descripcion' => 'Prendas de vestir y accesorios',              'estado' => 'activo'],
        ]);
    }
}
