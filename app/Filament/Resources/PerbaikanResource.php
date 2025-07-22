<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerbaikanResource\Pages;
use App\Models\Perbaikan;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class PerbaikanResource extends Resource
{
    protected static ?string $model = Perbaikan::class;
    protected static ?string $navigationIcon = 'heroicon-o-wrench';

    // Form untuk input data perbaikan
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Select::make('kendaraan_id')->relationship('kendaraan', 'nomor_plat')->required(),
            Forms\Components\Select::make('pekerja_id')->relationship('pekerja', 'nama')->required(),
            Forms\Components\DatePicker::make('tanggal_mulai')->required(),
            Forms\Components\DatePicker::make('tanggal_selesai'),
            Forms\Components\Select::make('status')->options([
                'proses' => 'Proses',
                'selesai' => 'Selesai',
            ])->required(),
        ]);
    }

    // Tabel untuk menampilkan data perbaikan
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kendaraan.nomor_plat'),
            Tables\Columns\TextColumn::make('pekerja.nama'),
            Tables\Columns\DateColumn::make('tanggal_mulai'),
            Tables\Columns\DateColumn::make('tanggal_selesai'),
            Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListPerbaikans::route('/'),
            'create' => Pages\CreatePerbaikan::route('/create'),
            'edit' => Pages\EditPerbaikan::route('/{record}/edit'),
        ];
    }
}
