<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BussinesSocialResource\Pages;
use App\Filament\Resources\BussinesSocialResource\RelationManagers;
use App\Models\BussinesSocial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BussinesSocialResource extends Resource
{
    protected static ?string $model = BussinesSocial::class;
    protected static ?string $navigationLabel = 'Redes Sociales';
    protected static ?string $breadcrumb = 'Redes Sociales';
    protected static ?string $navigationIcon = 'heroicon-o-share';
    protected static ?string $navigationGroup = 'Gestión';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información de Red Social')
                    ->schema([
                        Forms\Components\Select::make('bussine_id')
                            ->label('Empresa')
                            ->relationship('bussine', 'name')
                            ->required()
                            ->searchable()
                            ->preload(),
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre de la Red Social')
                            ->placeholder('Ej: Facebook, Instagram, LinkedIn, Twitter')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('url')
                            ->label('URL')
                            ->url()
                            ->placeholder('https://...')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bussine.name')
                    ->label('Empresa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Red Social')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->searchable()
                    ->limit(50)
                    ->url(fn ($record) => $record->url)
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->icon('heroicon-o-eye'),
                Tables\Actions\EditAction::make()
                    ->icon('heroicon-o-pencil'),
                Tables\Actions\DeleteAction::make()
                    ->successNotificationTitle('Red social eliminada correctamente')
                    ->color('danger'),
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
            'index' => Pages\ListBussinesSocials::route('/'),
            'create' => Pages\CreateBussinesSocial::route('/create'),
            'edit' => Pages\EditBussinesSocial::route('/{record}/edit'),
        ];
    }
}


