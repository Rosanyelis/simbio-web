<?php

namespace App\Filament\Resources\WorkTeamResource\Pages;

use App\Filament\Resources\WorkTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWorkTeam extends EditRecord
{
    protected static string $resource = WorkTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->successNotificationTitle('Miembro del equipo eliminado correctamente'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Miembro del equipo actualizado correctamente';
    }
}


