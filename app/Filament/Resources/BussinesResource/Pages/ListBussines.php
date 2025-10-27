<?php

namespace App\Filament\Resources\BussinesResource\Pages;

use App\Filament\Resources\BussinesResource;
use App\Models\Bussines;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBussines extends ListRecords
{
    protected static string $resource = BussinesResource::class;

    public function mount(): void
    {
        // Redirigir automáticamente a la edición del primer registro
        $bussines = Bussines::first();
        
        if ($bussines) {
            // Si existe una empresa, redirigir a su edición
            redirect()->to(BussinesResource::getUrl('edit', ['record' => $bussines->id]));
        } else {
            // Si no existe, redirigir a crear una
            redirect()->to(BussinesResource::getUrl('create'));
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Nueva Empresa')
                ->icon('heroicon-o-plus'),
        ];
    }
}


