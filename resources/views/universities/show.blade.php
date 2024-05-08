<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $university->name }}
        </h2>
    </x-slot>

    <x-alert-success />
    <x-alert-error />

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <img src="{{ asset($university->picture) }}" alt="Image of {{ $university->name }}" class="w-full mb-4">
                <div class="p-6">
                    <p>{{ $university->description }}</p>

                    <div class="flex justify-end mb-4 space-x-4">
                        <button onclick="toggleVisibility('ratingForm', 'commentForm')" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                            Noter
                        </button>
                        <button onclick="toggleVisibility('commentForm', 'ratingForm')" class="px-4 py-2 text-white bg-green-500 rounded hover:bg-green-700">
                            Commenter
                        </button>
                    </div>

                    <!-- Comment Form -->
                    <div id="commentForm" style="display:none;">
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="university_id" value="{{ $university->id }}">
                            <label for="comment" class="block text-sm font-medium text-gray-700">Ajouter un commentaire:</label>
                            <textarea id="comment" name="comment" rows="3" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Votre commentaire..."></textarea>
                            <button type="submit" class="px-4 py-2 mt-3 text-white bg-green-500 rounded hover:bg-green-700">Commenter</button>
                        </form>
                    </div>

                    <!-- Comments Display Area -->
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900">Commentaires:</h3>
                        @forelse ($comments as $comment)
                            <div class="mt-4 p-4 bg-gray-100 rounded-lg shadow">
                                <p class="text-sm font-semibold">{{ $comment->user->name ?? 'Utilisateur inconnu' }}</p>
                                <p class="text-gray-600">{{ $comment->content }}</p>
                                <p class="text-right text-xs text-gray-400">{{ $comment->created_at->format('d M Y') }}</p>
                            </div>
                        @empty
                            <p class="text-sm text-gray-500">Aucun commentaire pour l'instant.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleVisibility(showId, hideId) {
            document.getElementById(showId).style.display = 'block';
            document.getElementById(hideId).style.display = 'none';
        }
    </script>
</x-app-layout>
