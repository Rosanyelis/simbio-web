<?php

namespace App\Filament\Resources\LineResource\Pages;

use App\Filament\Resources\LineResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLine extends CreateRecord
{
    protected static string $resource = LineResource::class;

    protected static ?string $title = 'Crear Línea de Producto';
    protected static ?string $slug = 'crear-línea-de-producto';

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label('Regresar')
                ->icon('heroicon-o-arrow-left')
                ->url(LineResource::getUrl('index')),
        ];
    }

    #redirigir a la lista de líneas de productos después de crear una nueva línea
    protected function getRedirectUrl(): string
    {
        return LineResource::getUrl('index');
    }
}
