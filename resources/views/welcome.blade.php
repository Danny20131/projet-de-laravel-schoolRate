<x-guest-layout>
    <!-- Navigation pour les utilisateurs authentifiés et non authentifiés -->
    <div class="bg-white shadow">
        <div class="flex items-center justify-between px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-start">
                <x-application-mark class="block w-auto h-9" />
                <br>
                <a href="/" class="text-lg font-semibold text-gray-700 hover:text-gray-900">UniRank</a>
            </div>
            <div>
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="px-4 text-sm font-semibold text-gray-600 hover:text-gray-900">Tableau de bord</a>
                @else
                <a href="{{ route('login') }}" class="px-4 text-sm font-semibold text-gray-600 hover:text-gray-900">se connecter</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="px-4 text-sm font-semibold text-gray-600 hover:text-gray-900">s'inscrire</a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </div>

    <!-- Bannière d'introduction -->
    <div class="relative bg-center bg-cover h-96" style="background-image: url('https://tdn.tg/wp-content/uploads/2021/01/Togo-appel-a-candidatures-pour-des-theses-de-Doctorat-a-lUniversite-de-Lome-2-1.jpg');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white">
                <h1 class="text-4xl font-bold">Découvrez les Universités de Lomé</h1>
                <p class="mt-2 text-xl">Explorer, apprendre et grandir</p>
            </div>
        </div>
    </div>


    <!-- Section À propos -->
    <section class="py-8 bg-gray-100 border-b">
        <div class="container max-w-5xl m-8 mx-auto">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                A propos
            </h2>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full p-6 md:w-1/2">
                    <h3 class="mb-3 text-3xl font-bold leading-tight text-gray-800">
                        Découvrez nos universités
                    </h3>
                    <p class="mb-8 text-gray-600">
                        "Explorez la riche diversité des universités de Lomé, des institutions hautement reconnues non seulement pour leur excellence académique, mais aussi pour leurs programmes novateurs qui préparent les étudiants à exceller dans un marché mondial compétitif. Chaque université offre une variété de disciplines et spécialisations, permettant aux étudiants de personnaliser
                        leur parcours éducatif selon leurs passions et aspirations professionnelles.
                        En plus des rigoureux programmes académiques, ces universités se distinguent par leurs
                        infrastructures modernes, équipées des dernières technologies et conçues pour favoriser un environnement d'apprentissage interactif et stimulant. Les étudiants bénéficient d'un accès à des bibliothèques bien fournies, des laboratoires de recherche de pointe, et des espaces de travail collaboratifs qui encouragent l'innovation et la créativité.
                    </p>
                </div>
                <div class="w-full p-6 md:w-1/2">
                    <img src="https://univ-lome.tg/sites/default/files/styles/normal_size/public/articles/Article%20nauguration%20bloc%20Poly3.jpg?itok=b8BKGEMR" alt="Campus universitaire de Lomé" class="h-auto max-w-full rounded-lg shadow">
                </div>
            </div>
            <div class="flex flex-col-reverse flex-wrap sm:flex-row">
                <div class="w-full p-6 mt-6 md:w-1/2">
                    <img src="https://letabloid.tg/wp-content/uploads/2023/10/IMG-20231017-WA0350.jpg" alt="Autre vue du campus universitaire de Lomé" class="h-auto max-w-full rounded-lg shadow">
                </div>
                <div class="w-full p-6 mt-6 md:w-1/2">
                    <h3 class="mb-3 text-3xl font-bold leading-tight text-gray-800">
                        Une communauté académique engagée
                    </h3>
                    <p class="mb-8 text-gray-600">
                        "Rejoignez une communauté universitaire dynamique et engagée à Lomé, où étudiants et professeurs collaborent étroitement pour relever les défis académiques et professionnels de demain. Nos universités sont des lieux de rencontre pour des esprits curieux et déterminés, venant de divers horizons pour construire ensemble un avenir prometteur. Ici, vous ne serez pas seulement un étudiant, mais un acteur essentiel d'une aventure intellectuelle et professionnelle.
                         Les professeurs, reconnus pour leur expertise et leur passion pour l'enseignement, sont dévoués à transmettre des connaissances de pointe et à guider les étudiants à travers un parcours éducatif personnalisé et adaptatif. Ils sont les mentors qui inspirent, défient et ouvrent les portes sur 
                         des opportunités de recherche et de développement professionnel inestimables.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="py-8 bg-white border-b">
        <div class="container flex flex-wrap pt-4 pb-12 mx-auto">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Explorez les Universités de Lomé
            </h2>
            <div class="w-full mb-4">
                <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"></div>
            </div>

            <!-- Université de Lomé -->
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                        <p class="w-full px-6 mt-6 text-xs text-gray-600 md:text-sm">
                            UNIVERSITÉ DE LOMÉ
                        </p>
                        <div class="w-full px-6 text-xl font-bold text-gray-800">
                            Université de Lomé
                        </div>
                        <p class="px-6 mb-5 text-base text-gray-600">
                            Fondée en 1970, l'Université de Lomé est la plus grande institution d'enseignement supérieur au Togo.
                        </p>
                    </a>
                </div>
                <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
                    <div class="flex items-center justify-start">
                        <button class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 rounded shadow-lg lg:mx-0 hover:underline gradient2">
                            <a href="https://univ-lome.tg/" class="flex flex-wrap no-underline hover:no-underline"> Visitez le site</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Université de Kpalimé -->
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                        <p class="w-full px-6 mt-6 text-xs text-gray-600 md:text-sm">
                            UNIVERSITÉ DE KARA
                        </p>
                        <div class="w-full px-6 text-xl font-bold text-gray-800">
                            Université de Kara
                        </div>
                        <p class="px-6 mb-5 text-base text-gray-600">
                            Située au nord du Togo, l'Université de Kara est reconnue pour ses excellents programmes en droit, en gestion et en sciences de l'éducation, contribuant activement au développement régional.
                        </p>
                    </a>
                    
                </div>
                <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
                    <div class="flex items-center justify-center">
                        <button class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 rounded shadow-lg lg:mx-0 hover:underline gradient2">
                            <a href="https://univ-kara.tg/" class="flex flex-wrap no-underline hover:no-underline"> Visitez le site</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- École Supérieure des Affaires -->
            <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
                        <p class="w-full px-6 mt-6 text-xs text-gray-600 md:text-sm">
                            ÉCOLE SUPÉRIEURE DES AFFAIRES
                        </p>
                        <div class="w-full px-6 text-xl font-bold text-gray-800">
                            École Supérieure des Affaires
                        </div>
                        <p class="px-6 mb-5 text-base text-gray-600">
                            Spécialisée dans le commerce et le management, cette école offre des programmes conçus pour répondre aux exigences du marché mondial.
                        </p>
                    </a>
                </div>
                <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
                    <div class="flex items-center justify-end">
                        <button class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 rounded shadow-lg lg:mx-0 hover:underline gradient2">
                            <a href="https://www.esatogo.com/" class="flex flex-wrap no-underline hover:no-underline"> Visitez le site</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white bg-gray-800">
        <div class="max-w-6xl px-4 py-6 mx-auto">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-lg font-semibold">Universités a Lomé</h3>
                    <p class="mt-2 text-sm">
                        Découvrez un large éventail de programmes académiques et profitez d'une expérience universitaire enrichissante à Lomé.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Liens rapides</h3>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="hover:text-orange-500">Accueil</a></li>
                        <li><a href="#" class="hover:text-orange-500">À propos</a></li>

                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Contactez-nous</h3>
                    <p class="mt-2 text-sm">Email: info@unilome.tg</p>
                    <p class="text-sm">Téléphone: +228 123 456 789</p>
                    <div class="flex mt-4 space-x-4">
                        <a href="#" class="hover:text-orange-500"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-orange-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-orange-500"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 mt-4 text-sm text-center border-t border-gray-700">
            © 2024 Universités a Lomé. Tous droits réservés.
        </div>
    </footer>


</x-guest-layout>
