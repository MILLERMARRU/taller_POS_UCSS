<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovimientoInventarioSeeder extends Seeder
{
    public function run(): void
    {
        // El trigger tr_actualizar_stock_productos se dispara en cada INSERT:
        // - Calcula stock_anterior y stock_nuevo automáticamente
        // - Actualiza productos.stock con el nuevo valor
        // Solo se indica producto_id, tipo_movimiento, cantidad y motivo.

        $entradas = [
            // Electrónicos
            ['producto_id' => 1,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 40,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-05'],
            ['producto_id' => 2,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 80,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-05'],
            ['producto_id' => 3,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 30,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-05'],
            // Alimentos
            ['producto_id' => 4,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 100, 'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-06'],
            ['producto_id' => 5,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 60,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-06'],
            ['producto_id' => 6,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 120, 'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-06'],
            // Bebidas
            ['producto_id' => 7,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 200, 'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-07'],
            ['producto_id' => 8,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 96,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-07'],
            // Limpieza
            ['producto_id' => 9,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 50,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-08'],
            ['producto_id' => 10, 'tipo_movimiento' => 'ENTRADA', 'cantidad' => 60,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-08'],
            // Oficina
            ['producto_id' => 11, 'tipo_movimiento' => 'ENTRADA', 'cantidad' => 40,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-09'],
            ['producto_id' => 12, 'tipo_movimiento' => 'ENTRADA', 'cantidad' => 200, 'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-09'],
            // Ropa
            ['producto_id' => 13, 'tipo_movimiento' => 'ENTRADA', 'cantidad' => 50,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-10'],
            ['producto_id' => 14, 'tipo_movimiento' => 'ENTRADA', 'cantidad' => 40,  'motivo' => 'Compra inicial de stock', 'fecha' => '2026-01-10'],

            // Reposiciones posteriores
            ['producto_id' => 1,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 20,  'motivo' => 'Reposición de stock',    'fecha' => '2026-03-10'],
            ['producto_id' => 4,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 50,  'motivo' => 'Reposición de stock',    'fecha' => '2026-03-12'],
            ['producto_id' => 7,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 100, 'motivo' => 'Reposición de stock',    'fecha' => '2026-04-05'],
            ['producto_id' => 6,  'tipo_movimiento' => 'ENTRADA', 'cantidad' => 60,  'motivo' => 'Reposición de stock',    'fecha' => '2026-05-01'],

            // Ajustes negativos (dejan algunos productos en stock crítico)
            ['producto_id' => 3,  'tipo_movimiento' => 'AJUSTE',  'cantidad' => 27,  'motivo' => 'Ajuste por inventario físico', 'fecha' => '2026-05-20'],
            ['producto_id' => 12, 'tipo_movimiento' => 'AJUSTE',  'cantidad' => 155, 'motivo' => 'Ajuste por inventario físico', 'fecha' => '2026-05-20'],
            ['producto_id' => 14, 'tipo_movimiento' => 'AJUSTE',  'cantidad' => 33,  'motivo' => 'Ajuste por inventario físico', 'fecha' => '2026-05-20'],
        ];

        foreach ($entradas as $mov) {
            DB::table('movimientos_inventario')->insert([
                'producto_id'     => $mov['producto_id'],
                'tipo_movimiento' => $mov['tipo_movimiento'],
                'cantidad'        => $mov['cantidad'],
                'stock_anterior'  => 0,
                'stock_nuevo'     => 0,
                'motivo'          => $mov['motivo'],
                'fecha'           => $mov['fecha'],
            ]);
        }
    }
}
