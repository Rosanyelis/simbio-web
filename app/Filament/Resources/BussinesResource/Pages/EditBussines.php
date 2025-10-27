<?php

namespace App\Filament\Resources\BussinesResource\Pages;

use App\Filament\Resources\BussinesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBussines extends EditRecord
{
    protected static string $resource = BussinesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Removemos el botón de eliminar para proteger los datos de la empresa
        ];
    }

    protected function getRedirectUrl(): string
    {
        // Mantener en la misma página después de guardar
        return $this->getResource()::getUrl('edit', ['record' => $this->record]);
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Empresa actualizada correctamente';
    }
}


