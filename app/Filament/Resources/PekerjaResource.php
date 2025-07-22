<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PekerjaResource\Pages;
use App\Models\Pekerja;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class PekerjaResource extends Resource
{
    protected static ?string $model = Pekerja::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';

    // Form untuk input data pekerja
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('keahlian')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('status_pekerja')
                ->options([
                    'tersedia' => 'Tersedia',
                    'sibuk' => 'Sibuk',
                ])
                ->required(),
        ]);
    }

    // Tabel untuk menampilkan data pekerja
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama'),
            Tables\Columns\TextColumn::make('keahlian'),
            Tables\Columns\TextColumn::make('status_pekerja'),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPekerjas::route('/'),
            'create' => Pages\CreatePekerja::route('/create'),
            'edit' => Pages\EditPekerja::route('/{record}/edit'),
        ];
    }
}
