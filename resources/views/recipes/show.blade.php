<x-layout>

    <div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-sm border border-gray-100">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            La recette est : <span class="text-blue-600">{{ $recipe->title }}</span>
        </h1>

        <ul class="space-y-3">
            @foreach($recipe->ingredients as $ingredient)
                <li class="flex items-center gap-3 text-gray-600 bg-gray-50 p-3 rounded-lg">
                    <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                    {{ $ingredient }}
                </li>
            @endforeach
        </ul>

    </div>

</x-layout>