<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BussinesResource\Pages;
use App\Filament\Resources\BussinesResource\RelationManagers;
use App\Models\Bussines;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BussinesResource extends Resource
{
    protected static ?string $model = Bussines::class;
    protected static ?string $navigationLabel = 'Empresas';
    protected static ?string $breadcrumb = 'Empresas';
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Gestión';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información General')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->label('Correo Electrónico')
                            ->email()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->label('Teléfono')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('address')
                            ->label('Dirección')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Información Adicional')
                    ->schema([
                        Forms\Components\FileUpload::make('url_image')
                            ->label('Imagen de la Empresa')
                            ->image()
                            ->directory('bussines')
                            ->maxSize(2048),
                        Forms\Components\Textarea::make('history')
                            ->label('Historia')
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Redes Sociales')
                    ->description('Agrega las redes sociales de la empresa.')
                    ->collapsible()
                    ->schema([
                        Forms\Components\Repeater::make('bussinesSocials')
                            ->relationship('bussinesSocials')
                            ->label('Redes Sociales')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nombre de la Red Social')
                                    ->placeholder('Ej: Facebook, Instagram, LinkedIn')
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->label('URL')
                                    ->url()
                                    ->placeholder('https://...')
                                    ->required(),
                            ])
                            ->columns(2)
                            ->columnSpanFull()
                            ->addActionLabel('Agregar Red Social'),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Teléfono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->label('Dirección')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\ImageColumn::make('url_image')
                    ->label('Imagen'),
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
                Tables\Actions\EditAction::make()
                    ->icon('heroicon-o-pencil'),
            ])
            ->bulkActions([
                // Removemos acciones masivas para proteger los datos
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
            'index' => Pages\ListBussines::route('/'),
            'create' => Pages\CreateBussines::route('/create'),
            'edit' => Pages\EditBussines::route('/{record}/edit'),
        ];
    }
}


