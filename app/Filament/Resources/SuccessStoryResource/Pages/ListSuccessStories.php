<?php

namespace App\Filament\Resources\SuccessStoryResource\Pages;

use App\Filament\Resources\SuccessStoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuccessStories extends ListRecords
{
    protected static string $resource = SuccessStoryResource::class;
    protected static ?string $title = 'Casos de Éxito';
    # nombre del breadcrumb que se muestra en la parte superior de la página
    protected static ?string $breadcrumb = 'Listado';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Crear Caso de Éxito'),
        ];
    }
}

