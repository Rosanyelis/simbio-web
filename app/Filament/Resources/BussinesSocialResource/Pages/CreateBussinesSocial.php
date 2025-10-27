<?php

namespace App\Filament\Resources\BussinesSocialResource\Pages;

use App\Filament\Resources\BussinesSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBussinesSocial extends CreateRecord
{
    protected static string $resource = BussinesSocialResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Red social creada correctamente';
    }
}


