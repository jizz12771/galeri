<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Foto;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FotoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FotoResource\RelationManagers;

class FotoResource extends Resource
{
    protected static ?string $model = Foto::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('judul')
                ->required(),
            FileUpload::make('file_path')
                ->disk('public')
                ->directory('foto')
                ->image()
                ->required(),
            Select::make('kategori_id')
                ->relationship('kategori', 'nama_kategori')
                ->required(),
            Select::make('fotografer_id')
                ->relationship('fotografer', 'nama_fotografer')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('judul')->searchable(),
            ImageColumn::make('file_path')
                    ->disk('public')      // wajib
                    ->visibility('public')
                    ->label('Foto'),
            TextColumn::make('kategori.nama_kategori'),
            TextColumn::make('fotografer.nama_fotografer'),
            TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFotos::route('/'),
        ];
    }
}
