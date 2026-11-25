<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="px-4 lg:px-16 bg-white flex flex-wrap items-center py-4 shadow-md">

        <div class="flex-1 flex justify-between items-center">
            <a href="#" class="text-xl font-semibold text-gray-900">
                Company
            </a>
        </div>

        <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 20 20">

                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
                </path>
            </svg>
        </label>

        <input class="hidden" type="checkbox" id="menu-toggle">

        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">

                    <x-link-item href="/" :active="Route::currentRouteName() === 'homepage' ? true : false" class="underline">
                        HomePage
                    </x-link-item>
                    <x-link-item href="/projects" :active="Route::currentRouteName() === 'projects' ? true : false">
                        My Projects
                    </x-link-item>
                    <x-link-item href="/recipes" :active="fnmatch('recipes.*',Route::currentRouteName()) ? true : false">
                        Recipes
                    </x-link-item>
                    <x-link-item href="/produits" :active="fnmatch('produits.*', Route::currentRouteName()) ? true : false">
                        Produits
                    </x-link-item>

                </ul>
            </nav>
        </div>

    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto px-4 py-5 flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="text-center py-4 bg-white border-t mt-auto">
        <p class="text-gray-500 mb-0">
            &copy; 2026 MyApp. Tous droits réservés.
        </p>
    </footer>

</body>

</html>