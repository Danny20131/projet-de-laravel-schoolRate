<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Mettre à jour le mot de passe') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester en sécurité.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Mot de passe actuel') }}" />
            <x-input id="current_password" type="password" class="block w-full mt-1" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('Nouveau Mot de passe') }}" />
            <x-input id="password" type="password" class="block w-full mt-1" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirmer le Mot de passe') }}" />
            <x-input id="password_confirmation" type="password" class="block w-full mt-1" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Sauvé.') }}
        </x-action-message>

        <x-button>
            {{ __('Sauvegarder') }}
        </x-button>
    </x-slot>
</x-form-section>
