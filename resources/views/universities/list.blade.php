<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Universités Données de Tables') }}
        </h2>
    </x-slot>

    <x-alert-success />
    <x-alert-error />
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold">Liste des Universités</h2>
                    <x-button>
                        <a href="{{ route('admin.universities.create') }}" class="btn btn-primary">Créer une Université</a>
                    </x-button>
                </div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Logos</th>
                            <th class="px-4 py-2">Nom</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Location</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($universities as $university)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">{{ $university->id }}</td>
                                <td class="px-4 py-2 border">
                                    <img src="{{ asset($university->picture) }}" alt="Logo de l'université" class="w-30 h-30">
                                </td>
                                <td class="px-4 py-2 border">{{ $university->name }}</td>
                                <td class="px-4 py-2 border">{{ \Illuminate\Support\Str::limit($university->description, 100, '...') }}</td>
                                <td class="px-4 py-2 border">{{ $university->location }}</td>
                                <td class="px-4 py-2 border">
                                    <x-button>
                                        <a href="{{ route('admin.universities.edit', $university) }}"
                                            class="btn btn-sm btn-primary">Éditer</a>
                                    </x-button>
                                    <form action="{{ route('admin.universities.destroy', $university) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-button type="submit" class="btn btn-sm btn-danger">Supprimer</x-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
