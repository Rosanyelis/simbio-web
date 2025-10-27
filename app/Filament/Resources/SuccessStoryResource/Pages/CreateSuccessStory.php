<?php

namespace App\Filament\Resources\SuccessStoryResource\Pages;

use App\Filament\Resources\SuccessStoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSuccessStory extends CreateRecord
{
    protected static string $resource = SuccessStoryResource::class;
    protected static ?string $title = 'Crear Caso de Éxito';
    # nombre del breadcrumb que se muestra en la parte superior de la página
    protected static ?string $breadcrumb = 'Crear';

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label('Regresar')
                ->url(SuccessStoryResource::getUrl('index'))
                ->icon('heroicon-o-arrow-left'),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return SuccessStoryResource::getUrl('index');
    }
}

