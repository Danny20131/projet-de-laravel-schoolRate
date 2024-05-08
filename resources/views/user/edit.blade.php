
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Modifier l\'Utilisateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="p-6">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <x-label for="name" value="Nom" />
                        <x-input id="name" type="text" class="block w-full mt-1" name="name" value="{{ $user->name }}" required autofocus />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <x-label for="email" value="Email" />
                        <x-input id="email" type="email" class="block w-full mt-1" name="email" value="{{ $user->email }}" required />
                        <x-input-error for="email" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            {{ __('Mettre à jour') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


