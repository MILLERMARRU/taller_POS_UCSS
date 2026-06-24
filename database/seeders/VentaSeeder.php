<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentaSeeder extends Seeder
{
    public function run(): void
    {
        // Ventas distribuidas en los últimos 12 meses para alimentar el dashboard
        $ventas = [
            // Julio 2025
            ['fecha' => '2025-07-05', 'cliente_id' => 1,    'comprobante' => 'B001-00001', 'metodo' => 'efectivo',    'notas' => null,              'items' => [[1, 2, 89.90], [2, 3, 18.90]]],
            ['fecha' => '2025-07-18', 'cliente_id' => 2,    'comprobante' => 'B001-00002', 'metodo' => 'tarjeta',     'notas' => null,              'items' => [[4, 5, 28.50], [6, 10, 5.90]]],
            // Agosto 2025
            ['fecha' => '2025-08-03', 'cliente_id' => 3,    'comprobante' => 'B001-00003', 'metodo' => 'efectivo',    'notas' => null,              'items' => [[7, 24, 2.00], [8, 6, 6.50]]],
            ['fecha' => '2025-08-21', 'cliente_id' => null, 'comprobante' => 'B001-00004', 'metodo' => 'efectivo',    'notas' => 'Venta mostrador', 'items' => [[9, 3, 16.90], [10, 4, 8.90]]],
            // Septiembre 2025
            ['fecha' => '2025-09-10', 'cliente_id' => 4,    'comprobante' => 'B001-00005', 'metodo' => 'yape',        'notas' => null,              'items' => [[11, 5, 28.00], [12, 20, 1.50]]],
            ['fecha' => '2025-09-25', 'cliente_id' => 5,    'comprobante' => 'B001-00006', 'metodo' => 'tarjeta',     'notas' => null,              'items' => [[1, 1, 89.90], [3, 1, 109.90]]],
            // Octubre 2025
            ['fecha' => '2025-10-08', 'cliente_id' => 6,    'comprobante' => 'B001-00007', 'metodo' => 'efectivo',    'notas' => null,              'items' => [[13, 3, 39.90], [14, 4, 18.90]]],
            ['fecha' => '2025-10-19', 'cliente_id' => null, 'comprobante' => 'B001-00008', 'metodo' => 'efectivo',    'notas' => 'Venta mostrador', 'items' => [[5, 10, 12.90], [4, 8, 28.50]]],
            // Noviembre 2025
            ['fecha' => '2025-11-04', 'cliente_id' => 7,    'comprobante' => 'B001-00009', 'metodo' => 'plin',        'notas' => null,              'items' => [[2, 5, 18.90], [12, 30, 1.50]]],
            ['fecha' => '2025-11-22', 'cliente_id' => 9,    'comprobante' => 'F001-00001', 'metodo' => 'transferencia','notas' => 'Factura empresa', 'items' => [[11, 10, 28.00], [3, 2, 109.90]]],
            // Diciembre 2025
            ['fecha' => '2025-12-05', 'cliente_id' => 1,    'comprobante' => 'B001-00010', 'metodo' => 'tarjeta',     'notas' => null,              'items' => [[1, 3, 89.90], [2, 4, 18.90]]],
            ['fecha' => '2025-12-15', 'cliente_id' => 2,    'comprobante' => 'B001-00011', 'metodo' => 'efectivo',    'notas' => null,              'items' => [[7, 48, 2.00], [8, 12, 6.50]]],
            ['fecha' => '2025-12-28', 'cliente_id' => null, 'comprobante' => 'B001-00012', 'metodo' => 'yape',        'notas' => 'Venta mostrador', 'items' => [[13, 5, 39.90], [14, 6, 18.90]]],
            // Enero 2026
            ['fecha' => '2026-01-12', 'cliente_id' => 3,    'comprobante' => 'B001-00013', 'metodo' => 'efectivo',    'notas' => null,              'items' => [[4, 10, 28.50], [6, 20, 5.90]]],
            ['fecha' => '2026-01-27', 'cliente_id' => 4,    'comprobante' => 'B001-00014', 'metodo' => 'tarjeta',     'notas' => null,              'items' => [[9, 4, 16.90], [10, 5, 8.90]]],
            // Febrero 2026
            ['fecha' => '2026-02-08', 'cliente_id' => 5,    'comprobante' => 'B001-00015', 'metodo' => 'plin',        'notas' => null,              'items' => [[1, 2, 89.90], [11, 3, 28.00]]],
            ['fecha' => '2026-02-20', 'cliente_id' => null, 'comprobante' => 'B001-00016', 'metodo' => 'efectivo',    'notas' => 'Venta mostrador', 'items' => [[5, 8, 12.90], [7, 36, 2.00]]],
            // Marzo 2026
            ['fecha' => '2026-03-03', 'cliente_id' => 6,    'comprobante' => 'B001-00017', 'metodo' => 'yape',        'notas' => null,              'items' => [[2, 6, 18.90], [12, 40, 1.50]]],
            ['fecha' => '2026-03-17', 'cliente_id' => 9,    'comprobante' => 'F001-00002', 'metodo' => 'transferencia','notas' => 'Factura empresa', 'items' => [[3, 3, 109.90], [11, 8, 28.00]]],
            // Abril 2026
            ['fecha' => '2026-04-09', 'cliente_id' => 7,    'comprobante' => 'B001-00018', 'metodo' => 'efectivo',    'notas' => null,              'items' => [[13, 4, 39.90], [14, 5, 18.90]]],
            ['fecha' => '2026-04-24', 'cliente_id' => 10,   'comprobante' => 'B001-00019', 'metodo' => 'tarjeta',     'notas' => null,              'items' => [[4, 15, 28.50], [5, 12, 12.90]]],
            // Mayo 2026
            ['fecha' => '2026-05-06', 'cliente_id' => 1,    'comprobante' => 'B001-00020', 'metodo' => 'yape',        'notas' => null,              'items' => [[8, 24, 6.50], [7, 48, 2.00]]],
            ['fecha' => '2026-05-19', 'cliente_id' => 2,    'comprobante' => 'B001-00021', 'metodo' => 'efectivo',    'notas' => null,              'items' => [[1, 1, 89.90], [2, 2, 18.90]]],
            ['fecha' => '2026-05-30', 'cliente_id' => null, 'comprobante' => 'B001-00022', 'metodo' => 'efectivo',    'notas' => 'Venta mostrador', 'items' => [[9, 5, 16.90], [6, 15, 5.90]]],
            // Junio 2026 (últimos 23 días — datos del mes actual para KPIs)
            ['fecha' => '2026-06-02', 'cliente_id' => 3,    'comprobante' => 'B001-00023', 'metodo' => 'tarjeta',     'notas' => null,              'items' => [[11, 4, 28.00], [12, 25, 1.50]]],
            ['fecha' => '2026-06-07', 'cliente_id' => 4,    'comprobante' => 'B001-00024', 'metodo' => 'plin',        'notas' => null,              'items' => [[13, 2, 39.90], [14, 3, 18.90]]],
            ['fecha' => '2026-06-11', 'cliente_id' => 5,    'comprobante' => 'B001-00025', 'metodo' => 'yape',        'notas' => null,              'items' => [[1, 2, 89.90], [3, 1, 109.90]]],
            ['fecha' => '2026-06-15', 'cliente_id' => null, 'comprobante' => 'B001-00026', 'metodo' => 'efectivo',    'notas' => 'Venta mostrador', 'items' => [[5, 6, 12.90], [4, 8, 28.50]]],
            ['fecha' => '2026-06-19', 'cliente_id' => 6,    'comprobante' => 'B001-00027', 'metodo' => 'tarjeta',     'notas' => null,              'items' => [[7, 24, 2.00], [8, 6, 6.50]]],
            ['fecha' => '2026-06-23', 'cliente_id' => 10,   'comprobante' => 'B001-00028', 'metodo' => 'yape',        'notas' => null,              'items' => [[2, 4, 18.90], [9, 2, 16.90]]],
        ];

        foreach ($ventas as $v) {
            $subtotal = 0;
            foreach ($v['items'] as [$productoId, $cantidad, $precio]) {
                $subtotal += $cantidad * $precio;
            }
            $impuesto = round($subtotal * 0.18, 2);
            $total    = round($subtotal + $impuesto, 2);

            $ventaId = DB::table('ventas')->insertGetId([
                'cliente_id'      => $v['cliente_id'],
                'nro_comprobante' => $v['comprobante'],
                'subtotal'        => round($subtotal, 2),
                'impuesto'        => $impuesto,
                'total'           => $total,
                'metodo_pago'     => $v['metodo'],
                'notas'           => $v['notas'],
                'estado'          => 'completada',
                'created_at'      => $v['fecha'] . ' 10:00:00',
                'updated_at'      => $v['fecha'] . ' 10:00:00',
            ]);

            foreach ($v['items'] as [$productoId, $cantidad, $precio]) {
                DB::table('detalle_ventas')->insert([
                    'venta_id'       => $ventaId,
                    'producto_id'    => $productoId,
                    'cantidad'       => $cantidad,
                    'precio_unitario'=> $precio,
                    'subtotal'       => round($cantidad * $precio, 2),
                    'created_at'     => $v['fecha'] . ' 10:00:00',
                    'updated_at'     => $v['fecha'] . ' 10:00:00',
                ]);
            }
        }
    }
}
