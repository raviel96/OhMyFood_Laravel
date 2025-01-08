<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StarterResource\Pages;
use App\Filament\Resources\StarterResource\RelationManagers;
use App\Models\Starter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StarterResource extends Resource
{
    protected static ?string $model = Starter::class;

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
            'index' => Pages\ListStarters::route('/'),
            'create' => Pages\CreateStarter::route('/create'),
            'edit' => Pages\EditStarter::route('/{record}/edit'),
        ];
    }
}
