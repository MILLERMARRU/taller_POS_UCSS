<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadMedidaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('unidades_medida')->insert([
            ['nombre' => 'Unidad',    'abreviatura' => 'UND', 'estado' => 'activo'],
            ['nombre' => 'Kilogramo', 'abreviatura' => 'KG',  'estado' => 'activo'],
            ['nombre' => 'Litro',     'abreviatura' => 'LT',  'estado' => 'activo'],
            ['nombre' => 'Caja',      'abreviatura' => 'CJA', 'estado' => 'activo'],
            ['nombre' => 'Paquete',   'abreviatura' => 'PKT', 'estado' => 'activo'],
        ]);
    }
}
