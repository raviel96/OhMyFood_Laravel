<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DessertResource\Pages;
use App\Filament\Resources\DessertResource\RelationManagers;
use App\Models\Dessert;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DessertResource extends Resource
{
    protected static ?string $model = Dessert::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->searchable(),
                TextColumn::make('description')
                ->searchable(),
                TextColumn::make('price')
                ->money('EUR'),
                TextColumn::make('restaurant_id'),
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
            'index' => Pages\ListDesserts::route('/'),
            'create' => Pages\CreateDessert::route('/create'),
            'edit' => Pages\EditDessert::route('/{record}/edit'),
        ];
    }
}
