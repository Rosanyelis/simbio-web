<?php

namespace App\Filament\Resources\BussinesResource\Pages;

use App\Filament\Resources\BussinesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBussines extends CreateRecord
{
    protected static string $resource = BussinesResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirigir a la edición del registro recién creado
        return $this->getResource()::getUrl('edit', ['record' => $this->record]);
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Empresa creada correctamente';
    }
}


