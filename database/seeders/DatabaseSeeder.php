<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario administrador
        User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        $this->call([
            CategoriaSeeder::class,
            UnidadMedidaSeeder::class,
            EmpleadoSeeder::class,
            ProveedorSeeder::class,
            ClienteSeeder::class,
            ProductoSeeder::class,
            MovimientoInventarioSeeder::class,
            VentaSeeder::class,
        ]);
    }
}
