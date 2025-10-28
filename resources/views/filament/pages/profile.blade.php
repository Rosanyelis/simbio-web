<x-filament-panels::page>
    <div class="space-y-6">
        <!-- Formulario de Información Personal -->
        <form wire:submit="updateProfile">
            {{ $this->profileForm }}

            <div class="mt-6">
                <x-filament::button type="submit">
                    Actualizar Perfil
                </x-filament::button>
            </div>
        </form>

        <!-- Formulario de Cambio de Contraseña -->
        <form wire:submit="updatePassword">
            {{ $this->passwordForm }}

            <div class="mt-6">
                <x-filament::button type="submit" color="warning">
                    Cambiar Contraseña
                </x-filament::button>
            </div>
        </form>
    </div>
</x-filament-panels::page>

