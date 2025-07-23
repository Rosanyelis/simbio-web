<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
    protected static ?string $title = 'Crear Categorías';

    protected static ?string $slug = 'crear-categoría';
    # redirigir al listado al crear cada categoria
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}