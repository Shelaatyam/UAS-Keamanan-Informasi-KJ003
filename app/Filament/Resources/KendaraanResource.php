<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';

    // Form untuk input data kendaraan
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nomor_plat')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('jenis_kendaraan')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('status_perbaikan')
                ->options([
                    'perbaikan' => 'Perbaikan',
                    'selesai' => 'Selesai',
                ])
                ->required(),
        ]);
    }

    // Tabel untuk menampilkan data kendaraan
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nomor_plat'),
            Tables\Columns\TextColumn::make('jenis_kendaraan'),
            Tables\Columns\TextColumn::make('status_perbaikan'),
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
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
}
