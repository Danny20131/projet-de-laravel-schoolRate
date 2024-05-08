<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Liste des Critères de Notation') }}
        </h2>
    </x-slot>

    <x-alert-success />
    <x-alert-error />
    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.criteres.create') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                Ajouter un Nouveau Critère
            </a>
        </div>
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($criteria as $criterion)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                            {{ $criterion->name }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            {{ \Illuminate\Support\Str::limit($criterion->description, 70, '...') }}
                        </td>
                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                            <a href="{{ route('admin.criteres.edit', $criterion->id) }}" class="px-3 py-1 text-indigo-600 duration-150 ease-in-out bg-indigo-100 rounded-md trnsition hover:text-indigo-900 hover:bg-indigo-200">
                                Modifier
                            </a>
                            <form action="{{ route('admin.criteres.destroy', $criterion->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 text-red-600 transition duration-150 ease-in-out bg-red-100 rounded-md hover:text-red-900 hover:bg-red-200" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce critère?')">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
