<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdenesResource\Pages;
use App\Filament\Resources\OrdenesResource\RelationManagers;
use App\Models\Client;
use App\Models\Ordenes;
use App\Models\ServiceType;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;
use Illuminate\Support\Facades\URL;

use function Laravel\Prompts\select;

class OrdenesResource extends Resource
{
    protected static ?string $model = Ordenes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('date')->label('Fecha: ')->required()->label('Fecha: '),
                Select::make('type_service')->options(ServiceType::all()->pluck('name', 'name'))->label('Tipo de servicio: ')->searchable(),
                Select::make('client_id')->options(Client::all()->pluck('name', 'id'))->label('Cliente: ')->searchable(),
                Select::make('technical')->options(User::all()->pluck('name', 'id'))->label('Tecnico: '),
                DateTimePicker::make('hour_in'),
                DateTimePicker::make('hour_out'),
                Textarea::make('service_description')->label('Descripción del servicio')->autosize(),
                Textarea::make('used_components')->label('Componentes usados')->autosize(),
                Textarea::make('work_done')->label('Trabajo realizado')->autosize(),
                Textarea::make('observations')->label('Observaciones/Recomendaciones')->autosize(),
                //user id
                Select::make('state')->options([
                    'Abierto'=>'Abierto',
                    'Pendiente'=>'Pendiente',
                    'Cerrado'=>'Cerrado',
                    'Cancelado'=>'Cancelado',
                    'En espera'=>'En espera',
                ])->label('Estado de orden'),
                select::make('technical')->options(User::all()->pluck('name', 'id'))->label('tecnico')->searchable(),
                SignaturePad::make('client_signature')->label(__('Firma de cliente'))->penColor('#000000'),
                ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')->label('Fecha')->sortable()->searchable(),
                TextColumn::make('number')->label('Numero')->sortable()->searchable(),
                TextColumn::make('tecnico.name')->label('Responsable')->sortable()->searchable(),
                TextColumn::make('state')->label('Estado')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                TAbles\Actions\Action::make('downloadPDF')
                ->label('Descargar PDF')
                //->icon('heroicon-o-download')
                ->url(fn ($record) => URL::route('records.downloadPDF', ['id' => $record->id]))
                ->openUrlInNewTab(),
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
