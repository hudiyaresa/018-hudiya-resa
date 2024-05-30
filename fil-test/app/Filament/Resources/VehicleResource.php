<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Filament\Resources\VehicleResource\RelationManagers;
use App\Models\Vehicle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehicleResource extends Resource
{
    protected static ?string $model = Vehicle::class;

    protected static ?string $navigationIcon = 'heroicon-o-key';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand')
                    ->required()
                    ->datalist([
                        'Honda',
                        'Yamaha',
                        'Suzuki',
                        'Kawasaki',
                        'TVS',
                        'Bajaj',
                        'Viar',
                        'Piaggio',
                        'Ducati',
                        'KTM'
                    ]),
                Forms\Components\Select::make('vehicle_type')
                    ->required()
                    ->options([
                        'manual' => 'Manual Transmission',
                        'matic' => 'Matic Transmission',
                    ])
                    ->native(false),
                Forms\Components\Select::make('vehicle_cc')
                    ->required()
                    ->options([
                        '100-110cc' => '100cc - 110cc',
                        '125cc' => '125cc',
                        '150-155cc' => '150cc - 160cc',
                        '200cc' => '200cc'
                    ])
                    ->native(false),
                Forms\Components\TextInput::make('plat_number')
                    ->required(),
                Forms\Components\TextInput::make('year_production')
                    ->required()
                    ->numeric()
                    ->minValue('1900')
                    ->Length('4'),
                Forms\Components\DatePicker::make('STNK_validity_period')
                    ->required()
                    ->format('Y/m/d')                    
                    ->native(false),                    
                Forms\Components\DatePicker::make('last_time_tax_paid')
                    ->required()
                    ->format('Y/m/d')
                    ->native(false),                    
                Forms\Components\TextInput::make('current_km')
                    ->required(),
                Forms\Components\TextInput::make('avg_km_daily_use')
                    ->required(),
                Forms\Components\TextInput::make('last_km_oil_change')
                    ->required(),
                Forms\Components\TextInput::make('last_km_brake_change')
                    ->required(),
                Forms\Components\TextInput::make('last_km_tire_change')
                    ->required(),
                Forms\Components\TextInput::make('last_km_battery_change')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand'),
                Tables\Columns\TextColumn::make('plat_number'),
                Tables\Columns\TextColumn::make('STNK_validity_period'),
                Tables\Columns\TextColumn::make('current_km')
                    ->searchable(),

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
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }
}
