<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    protected static ?string $title = 'Crear Usuario';
    # nombre del breadcrumb que se muestra en la parte superior de la página
    protected static ?string $breadcrumb = 'Crear';

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label('Regresar')
                ->url(UserResource::getUrl('index'))
                ->icon('heroicon-o-arrow-left'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return UserResource::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Usuario creado correctamente';
    }
}

