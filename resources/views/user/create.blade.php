
<div class="container px-4 py-8 mx-auto">
    <h1 class="mb-4 text-3xl font-bold">Ajouter un Utilisateur</h1>
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nom</label>
            <input type="text" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input" id="name" name="name" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input" id="email" name="email" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Mot de passe</label>
            <input type="password" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-input" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>

