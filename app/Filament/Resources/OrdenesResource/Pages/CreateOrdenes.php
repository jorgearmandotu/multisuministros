<?php

namespace App\Filament\Resources\OrdenesResource\Pages;

use App\Filament\Resources\OrdenesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrdenes extends CreateRecord
{
    protected static string $resource = OrdenesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Agregar la ID del usuario autenticado al array de datos del formulario
        $data['user_id'] = auth()->id();
        $data['number'] = 'orden n1';
        
        return $data;
    }
}
