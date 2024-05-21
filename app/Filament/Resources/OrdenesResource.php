<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdenesResource\Pages;
use App\Filament\Resources\OrdenesResource\RelationManagers;
use App\Models\Ordenes;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdenesResource extends Resource
{
    protected static ?string $model = Ordenes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('date')->label('Fecha: ')->required()->label('Fecha: '),
                Select::make('type_service')->options([
                    'visita tecnica' => 'Visita Técnica',
                    'Soporte técnico' => 'Soprte técnico',
                    'Cableado estructurado' => 'Cableado estrucutrado',
                    'Camaras de seguridad' => 'Camaras de seguridad',
                ])->label('Tipo de servicio: '),
                Select::make('client')->options([
                    'visita tecnica' => 'Visita Técnica',
                    'Soporte técnico' => 'Soprte técnico',
                    'Cableado estructurado' => 'Cableado estrucutrado',
                    'Camaras de seguridad' => 'Camaras de seguridad',
                ])->label('Cliente: '),
                DateTimePicker::make('hour_in'),
                DateTimePicker::make('hour_out'),
            ])
            ->saved(function (Form $form, Ordenes $record) {
                // Asigna el ID del usuario autenticado
                $record->user_id = auth()->id();
                $record->save();
            });
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrdenes::route('/'),
            'create' => Pages\CreateOrdenes::route('/create'),
            'edit' => Pages\EditOrdenes::route('/{record}/edit'),
        ];
    }
}
