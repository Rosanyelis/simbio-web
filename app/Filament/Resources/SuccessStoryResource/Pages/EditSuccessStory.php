<?php

namespace App\Filament\Resources\SuccessStoryResource\Pages;

use App\Filament\Resources\SuccessStoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuccessStory extends EditRecord
{
    protected static string $resource = SuccessStoryResource::class;
    protected static ?string $title = 'Editar Caso de Éxito';

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('back')
                ->label('Regresar')
                ->url(SuccessStoryResource::getUrl('index'))
                ->icon('heroicon-o-arrow-left'),
            Actions\DeleteAction::make()
                ->label('Eliminar'),
        ];
    }
}

