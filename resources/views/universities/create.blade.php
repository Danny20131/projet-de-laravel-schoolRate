<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ajout d\'une nouvelle université') }}
        </h2>
    </x-slot>

    <div class="container px-4 py-8 mx-auto">
        <form action="{{ route('admin.universities.store') }}" method="POST" class="max-w-md mx-auto" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <x-label for="name" :value="__('Nom')" />
                <x-input id="name" type="text" class="block w-full mt-1" name="name" required autofocus />
                <x-input-error for="name" class="mt-2" />
            </div>
            <div class="mb-4">
                <x-label for="description" :value="__('Description')" />
                <x-input id="description" type="text" class="block w-full mt-1" name="description" required autofocus />
                <x-input-error for="description" class="mt-2" />
            </div>
            <div class="mb-4">
                <x-label for="location" :value="__('Location')" />
                <x-input id="location" type="text" class="block w-full mt-1" name="location" required autofocus />
                <x-input-error for="location" class="mt-2" />
            </div>
            <div class="mb-4">
                <x-label for="picture" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</x-label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-300 px-6 py-10">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"></path>
                            <path d="M17 8l-5-5-5 5"></path>
                            <path d="M12 3v12"></path>
                        </svg>
                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                            <label class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Upload a file</span>
                                <input id="picture" name="picture" accept=".png, .jpg, .svg, .jpeg, .gif" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs leading-5 text-gray-500">PNG, JPG, GIF up to 2MB</p>
                    </div>
                </div>
            </div>
            <x-button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Create</x-button>
        </form>
    </div>
</x-app-layout>
