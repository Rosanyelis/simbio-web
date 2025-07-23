<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;
    protected static ?string $title = 'Categorías';
    # nombre del breadcrumb que se muestra en la parte superior de la página
    protected static ?string $breadcrumb = 'Lístado';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Crear Categoría')
                ->icon('heroicon-o-plus')
                ->color('primary'),
        ];
    }

    # el nombre de Categoria que se muestre en la alerta de confirmación al eliminar
    protected function getRecordTitle(): string
    {
        return 'Categoría';
    }

}
