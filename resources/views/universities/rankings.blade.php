{{-- resources/views/universities/rankings.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800">
            Classements des Universités
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-6">
                <form method="GET" class="max-w-sm mx-auto">
                    <label for="criteria" class="block mb-2 text-sm font-medium text-gray-700">Sélectionnez le critère de tri :</label>
                    <select id="criteria" name="criteria" onchange="this.form.submit()" class="block w-full p-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                        <option value="">Sélectionnez le critère de tri :</option>
                        @foreach($criteria as $criterion)
                        <option value="{{ $criterion->id }}" {{ $selectedCriterion == $criterion->id ? 'selected' : '' }}>{{ $criterion->name }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                @foreach($universities as $university)
                <div class="mb-4 overflow-hidden bg-white rounded-lg shadow-lg">
                    <div class="md:flex">
                        <div class="md:flex-shrink-0">
                            <img class="object-cover w-full h-48 md:w-48 md:h-full" src="{{ asset($university->picture) }}">
                        </div>
                        <div class="p-8">
                            <div class="text-sm font-semibold tracking-wide text-indigo-500 uppercase">University</div>
                            <a href="{{ route('universities.show', $university->id) }}" class="block mt-1 text-lg font-medium leading-tight text-black hover:underline">
                                {{ $university->name }}
                            </a>
                            <p class="mt-2 text-gray-500">{{ $university->description }}</p>
                            <div class="mt-4">
                                <h4 class="font-semibold text-gray-600">Ratings:</h4>
                                @foreach($university->averageRatings as $criterionName => $averageRating)
                                <p><strong>{{ $criterionName }}:</strong> {{ number_format($averageRating, 2) }} / 5</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
