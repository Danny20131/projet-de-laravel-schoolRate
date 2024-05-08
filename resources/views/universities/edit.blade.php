<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Modifier l\'Université') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form action="{{ route('admin.universities.update', $university->id) }}" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <x-label for="name" :value="__('Nom')" />
                        <x-input id="name" type="text" class="block w-full mt-1" name="name" :value="$university->name" required autofocus />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <x-label for="description" :value="__('Description')" />
                        <x-input id="description" type="text" class="block w-full mt-1" name="description" :value="$university->description" required />
                        <x-input-error for="description" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <x-label for="location" :value="__('Location')" />
                        <x-input id="location" type="text" class="block w-full mt-1" name="location" :value="$university->location" required />
                        <x-input-error for="location" class="mt-2" />
                    </div>
                    <!-- New image upload field -->
                    <div class="mb-4">
                        <x-label for="picture" :value="__('Image')" />
                        <input id="picture" type="file" class="block w-full mt-1" name="picture" accept="image/*">
                        <x-input-error for="picture" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Mettre à jour') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
