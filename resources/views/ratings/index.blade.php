<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tableau des notations') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Utilisateur</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Université</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Critère</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Note</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ratings as $rating)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                {{ $rating->user->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                {{ $rating->university->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                {{ $rating->criteria->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                {{ $rating->score }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <form action="{{ route('ratings.destroy', $rating->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">
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
    </div>
</x-app-layout>
