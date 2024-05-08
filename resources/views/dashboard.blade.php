<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            @if(Auth::user() && Auth::user()->role == 'admin')
            {{ __('Tableau de Bord') }}
            @else
            {{ __('Liste des Universités') }}
            @endif

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="container px-4 py-8 mx-auto">
                    @if(Auth::user() && Auth::user()->role == 'admin')
                    <div class="container w-full pt-20 mx-auto">

                        <div class="w-full px-4 mb-16 leading-normal text-gray-800 md:px-0 md:mt-8">
                            <!--Console Content-->
                            <div class="flex flex-wrap">
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-green-600 rounded"><i class="fi fi-rr-users-alt"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Total Revenue</h5>
                                                <h3 class="text-3xl font-bold">$3249 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-pink-600 rounded"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Total d'Utilisateurs</h5>
                                                <h3 class="text-3xl font-bold">{{ $users->count() }} <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-yellow-600 rounded"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Nouveau Utilisateur</h5>
                                                <h3 class="text-3xl font-bold">{{ $newUserCount }} <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-blue-600 rounded"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Server Uptime</h5>
                                                <h3 class="text-3xl font-bold">152 days</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-indigo-600 rounded"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Nombre d'Universités</h5>
                                                <h3 class="text-3xl font-bold">{{ $universities->count() }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-red-600 rounded"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Nombre de Critères</h5>
                                                <h3 class="text-3xl font-bold">{{ $critere->count() }} <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                            </div>
                            <div class="w-full p-3">
                                <!--Table Card-->
                                <div class="bg-white border rounded shadow">
                                    <div class="p-3 border-b">
                                        <h5 class="font-bold text-gray-600 uppercase">Liste des Utilisateurs</h5>
                                    </div>
                                    <div class="p-5">
                                        <table class="w-full p-5 text-gray-700">
                                            <thead>
                                                <tr>
                                                    <th class="text-left text-blue-900">Nom</th>
                                                    <th class="text-left text-blue-900">Email</th>
                                                    <th class="text-left text-blue-900">Role</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->role }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <p class="py-2"><a href="{{ route('admin.users.index') }}">Voir plus...</a></p>

                                    </div>
                                </div>
                                <!--/table Card-->
                            </div>
                        </div>
                        <!--/ Console Content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    {{-- interface utilisateurs --}}
    <div class="max-w-screen-xl px-5 mx-auto mt-6 sm:px-10 lg:px-16">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($universities as $university)
            <div class="overflow-hidden transition duration-300 ease-in-out transform rounded-lg shadow-lg hover:scale-105">
                <a href="{{ route('universities.show', $university->id) }}">
                    <div class="relative">
                        <img class="object-cover w-full h-48 hover:opacity-75" src="{{ asset($university->picture) }}" alt="Image of {{ $university->name }}">
                        <div class="absolute top-0 bottom-0 left-0 right-0 transition duration-500 bg-gray-900 bg-opacity-50 hover:bg-opacity-30"></div>
                    </div>
                </a>
                <div class="px-6 py-4 bg-white">
                    <a href="{{ route('universities.show', $university->id) }}" class="block text-lg font-semibold text-gray-800 transition-colors duration-300 hover:text-indigo-600">
                        {{ $university->name }}
                    </a>
                    <p class="text-sm text-gray-600 truncate">
                        {{ $university->description }}
                    </p>
                </div>
                <div class="flex items-center justify-between px-6 pt-4 pb-2 bg-white">
                    <a href="{{ route('universities.show', $university->id) }}" class="px-4 py-2 text-sm font-semibold text-white transition duration-150 ease-in-out bg-blue-500 rounded hover:bg-blue-700">
                        A Propos
                    </a>
                    <span class="flex items-center text-sm text-gray-600">
                        <svg fill="currentColor" class="w-5 h-5 mr-2" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm0-4h-2V7h2v8z"/></svg>
                        {{ $university->created_at->format('d M Y') }}
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @endif
</div>

</x-app-layout>
