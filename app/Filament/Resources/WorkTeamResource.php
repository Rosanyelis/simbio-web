<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkTeamResource\Pages;
use App\Filament\Resources\WorkTeamResource\RelationManagers;
use App\Models\WorkTeam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkTeamResource extends Resource
{
    protected static ?string $model = WorkTeam::class;
    protected static ?string $navigationLabel = 'Equipo de Trabajo';
    protected static ?string $breadcrumb = 'Equipo de Trabajo';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Gestión';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información del Miembro')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('position')
                            ->label('Cargo')
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('url_image')
                            ->label('Foto del Miembro')
                            ->image()
                            ->directory('work-teams')
                            ->maxSize(2048),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Información Adicional')
                    ->schema([
                        Forms\Components\Textarea::make('function')
                            ->label('Función')
                            ->rows(3)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('review')
                            ->label('Reseña')
                            ->rows(3)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('projects')
                            ->label('Proyectos')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('url_image')
                    ->label('Foto')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bussine.name')
                    ->label('Empresa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->label('Cargo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('function')
                    ->label('Función')
                    ->limit(30)
                    ->toggleable(),
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
                    ->successNotificationTitle('Miembro del equipo eliminado correctamente')
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
            'index' => Pages\ListWorkTeams::route('/'),
            'create' => Pages\CreateWorkTeam::route('/create'),
            'edit' => Pages\EditWorkTeam::route('/{record}/edit'),
        ];
    }
}


