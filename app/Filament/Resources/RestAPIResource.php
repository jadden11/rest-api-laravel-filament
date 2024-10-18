<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RestAPIResource\Pages;
use App\Filament\Resources\RestAPIResource\RelationManagers;
use App\Models\RestAPI;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RestAPIResource extends Resource
{
    protected static ?string $model = RestAPI::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(25),

                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->minValue(0),

                TextInput::make('description')
                    ->required()
                    ->maxLength(50),

                TextInput::make('image')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('price')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('image')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListRestAPIS::route('/'),
            'create' => Pages\CreateRestAPI::route('/create'),
            'edit' => Pages\EditRestAPI::route('/{record}/edit'),
        ];
    }
}
