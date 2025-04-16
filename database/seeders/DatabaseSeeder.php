<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Client;
use App\Models\ServiceType;
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
        $user = User::create([
            'name' => 'Leonardo Rigoverto Gordillo',
            'email' => 'leo@gmail.com',
            'position_of_company' => 'adminsitrador de proxmox',
            'password' => bcrypt('Admin123.'),
        ]);
        $user = User::create([
            'name' => 'Sebastian Cabrera',
            'email' => 'sebastian@gmail.com',
            'position_of_company' => 'admon proxmox',
            'password' => bcrypt('Admin123.'),
        ]);
        $user = User::create([
            'name' => 'Claudia',
            'email' => 'claudia@gmail.com',
            'position_of_company' => 'administradora general de empresa',
            'password' => bcrypt('Admin123.'),
        ]);
        $user = User::create([
            'name' => 'Diego Banda',
            'email' => 'Diego@gmail.com',
            'position_of_company' => 'Auxiliar de operaciones',
            'password' => bcrypt('Admin123.'),
        ]);
        $user = User::create([
            'name' => 'Jorge Armando Urbina',
            'email' => 'jorge@gmail.com',
            'position_of_company' => 'Infraestructura',
            'password' => bcrypt('Admin123.'),
        ]);


        $client = Client::create([
            'identification_type' => 'NIT',
            'identification_number' => '11111',
            'name' => 'Clientes varios',
            'phone' => '111111',
            'address' => 'varios',
            'email' => 'varios@gmail.com'
        ]);
        $client = Client::create([
            'identification_type' => 'NIT',
            'identification_number' => '901139195',
            'name' => 'AGRO VETERINARIA ADESUR',
            'phone' => '',
            'address' => '',
            'email' => ''
        ]);
        $client = Client::create([
            'identification_type' => 'NIT',
            'identification_number' => '805029389',
            'name' => 'AGROPECUARIA LA SEVILLANA SAS ES REORGANIZACION',
            'phone' => '',
            'address' => '',
            'email' => ''
        ]);
        $client = Client::create([
            'identification_type' => 'NIT',
            'identification_number' => '900613286',
            'name' => 'ANDINA DE MATERIALES SAS',
            'phone' => '',
            'address' => '',
            'email' => ''
        ]);
        $client = Client::create([
            'identification_type' => 'NIT',
            'identification_number' => '95163654',
            'name' => 'CAMARONERA SAN ANTONIO',
            'phone' => '',
            'address' => '',
            'email' => ''
        ]);
        $typeService = ServiceType::create([
            'name' => 'SERVICIO TECNICO',
        ]);
        $typeService = ServiceType::create([
            'name' => 'GARANTIA',
        ]);
        $typeService = ServiceType::create([
            'name' => 'REPARACION DE EQUIPO',
        ]);
        $typeService = ServiceType::create([
            'name' => 'SOPORTE REMOTO',
        ]);
        $typeService = ServiceType::create([
            'name' => 'KEY ACCOUNT',
        ]);
        $typeService = ServiceType::create([
            'name' => 'REDES E INFRAESTRUCTURA',
        ]);
        $typeService = ServiceType::create([
            'name' => 'OTROS',
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
