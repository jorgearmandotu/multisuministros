<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Permission::create([
        //     'name'          => 'estadisticas',
        //     // 'guard_name'   => 'web',
        // ]);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'position_of_company' => 'administrador',
            'password' => bcrypt('Admin123.'),
        ]);

        // $user->givePermissionTo('remision.index', 'remision.store', 'printRemision',
        // 'listRemisiones', 'gestion-inventario', 'lines.index', 'lines.store', 'lines.update', 'groups.index',
        // 'groups.store', 'groups.update', 'locations.index', 'locations.store', 'locations.update', 'list-prices',
        // 'products-list', 'products.index', 'products.store', 'products.update', 'suppliers-list', 'suppliers.index',
        // 'shopping-invoices.store', 'list-terceros', 'terceros.index', 'terceros.store', 'terceros.show', 'terceros.update',
        // 'invoices.store', 'invoices.index', 'print-invoices', 'pending-invoices', 'receipt.index', 'receipt.store',
        // 'print-receipt', 'resolution-store', 'config-company.index', 'config-company.store', 'exports',
        // 'exports-invoice' , 'exports-receipt', 'admin-users.index', 'admin-users.store', 'gestion-documents', 'discharges', 'transferLocations', 'profile', 'notasAjuste', 'estadisticas');

    }
}
