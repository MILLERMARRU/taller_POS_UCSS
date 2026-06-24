<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        // stock=0 porque el trigger de movimientos_inventario actualiza el stock al insertar entradas
        DB::table('productos')->insert([
            // Electrónicos (cat 1, und 1)
            ['codigo' => 'ELEC-001', 'nombre' => 'Audifonos Bluetooth',     'descripcion' => 'Audifonos inalambricos con cancelacion de ruido', 'imagen' => null, 'categoria_id' => 1, 'unidad_id' => 1, 'precio_compra' => 45.00,  'precio_venta' => 89.90,  'stock' => 0, 'stock_minimo' => 5,  'estado' => 'inactivo'],
            ['codigo' => 'ELEC-002', 'nombre' => 'Cable USB-C 2m',          'descripcion' => 'Cable de carga y datos USB tipo C',             'imagen' => null, 'categoria_id' => 1, 'unidad_id' => 1, 'precio_compra' => 8.00,   'precio_venta' => 18.90,  'stock' => 0, 'stock_minimo' => 10, 'estado' => 'inactivo'],
            ['codigo' => 'ELEC-003', 'nombre' => 'Teclado inalambrico',     'descripcion' => 'Teclado compacto con conexion Bluetooth',        'imagen' => null, 'categoria_id' => 1, 'unidad_id' => 1, 'precio_compra' => 55.00,  'precio_venta' => 109.90, 'stock' => 0, 'stock_minimo' => 5,  'estado' => 'inactivo'],
            // Alimentos (cat 2)
            ['codigo' => 'ALIM-001', 'nombre' => 'Arroz extra premium',     'descripcion' => 'Arroz de grano largo, bolsa 5kg',               'imagen' => null, 'categoria_id' => 2, 'unidad_id' => 2, 'precio_compra' => 18.00,  'precio_venta' => 28.50,  'stock' => 0, 'stock_minimo' => 20, 'estado' => 'inactivo'],
            ['codigo' => 'ALIM-002', 'nombre' => 'Aceite vegetal 1L',       'descripcion' => 'Aceite de girasol refinado',                    'imagen' => null, 'categoria_id' => 2, 'unidad_id' => 3, 'precio_compra' => 7.50,   'precio_venta' => 12.90,  'stock' => 0, 'stock_minimo' => 15, 'estado' => 'inactivo'],
            ['codigo' => 'ALIM-003', 'nombre' => 'Fideos spaghetti 500g',   'descripcion' => 'Pasta de trigo duro, paquete 500g',             'imagen' => null, 'categoria_id' => 2, 'unidad_id' => 5, 'precio_compra' => 3.20,   'precio_venta' => 5.90,   'stock' => 0, 'stock_minimo' => 30, 'estado' => 'inactivo'],
            // Bebidas (cat 3)
            ['codigo' => 'BEB-001',  'nombre' => 'Agua mineral 600ml',      'descripcion' => 'Agua mineral sin gas',                          'imagen' => null, 'categoria_id' => 3, 'unidad_id' => 1, 'precio_compra' => 0.80,   'precio_venta' => 2.00,   'stock' => 0, 'stock_minimo' => 50, 'estado' => 'inactivo'],
            ['codigo' => 'BEB-002',  'nombre' => 'Gaseosa 1.5L',            'descripcion' => 'Bebida gaseosa sabor cola',                     'imagen' => null, 'categoria_id' => 3, 'unidad_id' => 1, 'precio_compra' => 3.50,   'precio_venta' => 6.50,   'stock' => 0, 'stock_minimo' => 24, 'estado' => 'inactivo'],
            // Limpieza (cat 4)
            ['codigo' => 'LIMP-001', 'nombre' => 'Detergente en polvo 1kg', 'descripcion' => 'Detergente multiusos en polvo',                 'imagen' => null, 'categoria_id' => 4, 'unidad_id' => 5, 'precio_compra' => 9.00,   'precio_venta' => 16.90,  'stock' => 0, 'stock_minimo' => 10, 'estado' => 'inactivo'],
            ['codigo' => 'LIMP-002', 'nombre' => 'Lejia 1L',                'descripcion' => 'Lejia concentrada para desinfeccion',            'imagen' => null, 'categoria_id' => 4, 'unidad_id' => 3, 'precio_compra' => 4.50,   'precio_venta' => 8.90,   'stock' => 0, 'stock_minimo' => 12, 'estado' => 'inactivo'],
            // Oficina (cat 5)
            ['codigo' => 'OFIC-001', 'nombre' => 'Resma de papel A4',       'descripcion' => 'Papel bond 75g, 500 hojas',                     'imagen' => null, 'categoria_id' => 5, 'unidad_id' => 4, 'precio_compra' => 18.00,  'precio_venta' => 28.00,  'stock' => 0, 'stock_minimo' => 10, 'estado' => 'inactivo'],
            ['codigo' => 'OFIC-002', 'nombre' => 'Lapicero azul',           'descripcion' => 'Lapicero de tinta seca punta 0.7mm',            'imagen' => null, 'categoria_id' => 5, 'unidad_id' => 1, 'precio_compra' => 0.60,   'precio_venta' => 1.50,   'stock' => 0, 'stock_minimo' => 50, 'estado' => 'inactivo'],
            // Ropa (cat 6)
            ['codigo' => 'ROPA-001', 'nombre' => 'Polo basico talla M',     'descripcion' => 'Polo de algodon 100%, talla M',                 'imagen' => null, 'categoria_id' => 6, 'unidad_id' => 1, 'precio_compra' => 18.00,  'precio_venta' => 39.90,  'stock' => 0, 'stock_minimo' => 8,  'estado' => 'inactivo'],
            ['codigo' => 'ROPA-002', 'nombre' => 'Calcetines pack x3',      'descripcion' => 'Pack de 3 pares de calcetines de algodon',      'imagen' => null, 'categoria_id' => 6, 'unidad_id' => 5, 'precio_compra' => 8.00,   'precio_venta' => 18.90,  'stock' => 0, 'stock_minimo' => 10, 'estado' => 'inactivo'],
        ]);
    }
}
