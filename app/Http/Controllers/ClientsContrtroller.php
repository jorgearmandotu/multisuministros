<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsContrtroller extends Controller
{
    public function listClients() {
        $clients = Client::all();
        return response($clients, 201);
    }

    public function createClients(Request $request){
        $request->validate([
            'type_dni' => 'identification_type',
            'identification_number' => 'identification_number',
            'name' => 'name',
            'phone' => 'phone',
            'address' => 'address',
            'email' => 'email,'
        ]);
    }
}
