<?php

namespace App\Filament\Resources\BussinesSocialResource\Pages;

use App\Filament\Resources\BussinesSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBussinesSocial extends EditRecord
{
    protected static string $resource = BussinesSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->successNotificationTitle('Red social eliminada correctamente'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Red social actualizada correctamente';
    }
}


