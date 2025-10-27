<?php

namespace App\Filament\Resources\WorkTeamResource\Pages;

use App\Filament\Resources\WorkTeamResource;
use App\Models\Bussines;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWorkTeam extends CreateRecord
{
    protected static string $resource = WorkTeamResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Asignar automáticamente la primera empresa
        $data['bussine_id'] = Bussines::first()?->id;
        
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Miembro del equipo creado correctamente';
    }
}


