<?php
namespace App\Filament\Resources;

use App\Filament\Resources\CarroResource\Pages;
use App\Filament\Resources\CarroResource\RelationManagers;
use App\Models\Carro;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarroResource extends Resource
{
    protected static ?string $model = Carro::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Brand')->required()->maxLength(255),
                // TextInput::make('Model')->required()->maxLength(255),
                // TextInput::make('Color')->required()->maxLength(255),
                // TextInput::make('LicensePlate')->required()->maxLength(255),
                // TextInput::make('Year')->required()->numeric()->default(now()->year),
                // TextInput::make('Price_per_Day')->required()->numeric(),
                // TextInput::make('FuelType')->required()->maxLength(255),
                // TextInput::make('Transmission')->required()->maxLength(255),
                // TextInput::make('Mileage')->nullable()->numeric(),
                // Select::make('Status')->options([
                //     0 => 'available',
                //     1 => 'sold',
                //     2 => 'reserved',
                // ])->default(0)->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Brand')->sortable()->searchable(),
                // TextColumn::make('Model')->sortable()->searchable(),
                // TextColumn::make('Color')->sortable()->searchable(),
                // TextColumn::make('LicensePlate')->sortable()->searchable(),
                // TextColumn::make('Year')->sortable()->searchable(),
                // TextColumn::make('Price_per_Day')->sortable()->searchable(),
                // TextColumn::make('FuelType')->sortable()->searchable(),
                // TextColumn::make('Transmission')->sortable()->searchable(),
                // TextColumn::make('Mileage')->sortable()->searchable(),
                // TextColumn::make('Status')->sortable()->searchable(),
                // TextColumn::make('created_at')->dateTime()->sortable()->searchable(),
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
            'index' => Pages\ListCarros::route('/'),
            'create' => Pages\CreateCarro::route('/create'),
            'edit' => Pages\EditCarro::route('/{record}/edit'),
        ];
    }
}
