<?php

namespace App\Filament\Resources\OrdenesResource\Pages;

use App\Filament\Resources\OrdenesResource;
use App\Models\Config;
use App\Models\Ordenes;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrdenes extends CreateRecord
{
    protected static string $resource = OrdenesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Agregar la ID del usuario autenticado al array de datos del formulario
        $data['user_id'] = auth()->id();
        //verificar el ultimo numero de orden y sumarlo
       $initial = Config::orderBy('created_at', 'desc')->first(); 
        $ultimoRegistro = Ordenes::orderBy('created_at', 'desc')->first();
        $number = $initial ? $initial->initial : '1';
        $numero = $ultimoRegistro ? $ultimoRegistro->number + 1 : $number;
        $data['number'] = $numero;
        //'ORD-'.Carbon::now()->year.'-2';
        
        return $data;
    }
}
