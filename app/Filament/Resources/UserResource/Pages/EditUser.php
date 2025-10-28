<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;
    protected static ?string $title = 'Editar Usuario';

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label('Regresar')
                ->url(UserResource::getUrl('index'))
                ->icon('heroicon-o-arrow-left'),
            Actions\DeleteAction::make()
                ->label('Eliminar'),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Usuario actualizado correctamente';
    }
}

