<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationLabel = 'Productos';
    protected static ?string $breadcrumb = 'Productos';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('line_id')
                    ->label('Línea de Producto')
                    ->relationship('line', 'name')
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->label('Categoría')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\TextInput::make('tag')
                    ->label('Etiqueta')
                    ->maxLength(255),
                Forms\Components\Select::make('related_products')
                    ->label('Asignar Productos Relacionados')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->options(Product::all()->pluck('name', 'id'))
                    ->relationship('relatedProducts', 'name'),
                Forms\Components\Textarea::make('description')
                    ->label('Descripción')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('url_image')
                    ->label('URL de Imagen'),
                Forms\Components\FileUpload::make('url_name_image')
                    ->label('URL de Imagen del Nombre'),
                Forms\Components\FileUpload::make('url_technical_sheet')
                    ->label('URL de Ficha Técnica'),
                Forms\Components\FileUpload::make('url_safety_data_sheet')
                    ->label('URL de Ficha de Seguridad'),
                Forms\Components\FileUpload::make('url_case_studies')
                    ->label('URL de Casos de Estudio'),
                Forms\Components\Section::make('Información Adicional')
                    ->description('Agrega información adicional relevante para el producto.')
                    ->collapsible()
                    ->schema([
                        Forms\Components\Repeater::make('additional_information_products')
                            ->relationship('additionalInformationProducts')
                            ->label('Información Adicional')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Título')
                                    ->required(),
                                Forms\Components\Textarea::make('description')
                                    ->label('Contenido')
                                    ->required(),
                            ])
                            ->columnSpanFull(),
                    ]),

            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('line.name')
                    ->label('Línea de Producto')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Categoría')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tag')
                    ->label('Etiqueta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado el')
                    ->dateTime()
                    ->sortable(),
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
                    ->successNotificationTitle('Producto eliminado correctamente')
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
