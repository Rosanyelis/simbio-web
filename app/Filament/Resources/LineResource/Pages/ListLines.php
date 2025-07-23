<?php

namespace App\Filament\Resources\LineResource\Pages;

use App\Filament\Resources\LineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLines extends ListRecords
{
    protected static string $resource = LineResource::class;

    protected static ?string $title = 'Líneas de Productos';
    # nombre del breadcrumb que se muestra en la parte superior de la página
    protected static ?string $breadcrumb = 'Lístado';
    



    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Nueva Línea de Producto')
                ->icon('heroicon-o-plus')
                ->color('primary'),
        ];
    }
}
