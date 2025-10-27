<?php

namespace App\Filament\Resources\WorkTeamResource\Pages;

use App\Filament\Resources\WorkTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkTeams extends ListRecords
{
    protected static string $resource = WorkTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Nuevo Miembro')
                ->icon('heroicon-o-plus'),
        ];
    }
}


