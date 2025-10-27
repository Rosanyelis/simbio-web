<?php

namespace App\Filament\Resources\BussinesSocialResource\Pages;

use App\Filament\Resources\BussinesSocialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBussinesSocials extends ListRecords
{
    protected static string $resource = BussinesSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Nueva Red Social')
                ->icon('heroicon-o-plus'),
        ];
    }
}


