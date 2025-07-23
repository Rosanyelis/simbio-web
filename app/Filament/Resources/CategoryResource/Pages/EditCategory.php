<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;
    protected static ?string $title = 'Editar Categoría';

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
            // regresar al listado al editar cada categoria
            Actions\Action::make('back')
                ->label('Regresar')
                ->icon('heroicon-o-arrow-left')
                ->url(CategoryResource::getUrl('index'))
                ->color('secondary'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
