
<x-layout>


    <h1>My products</h1>

    @foreach($produits as $produit)

    <p><a href="{{ route('produits.show', $produit) }}" class="underline text-blue-500">{{ $produit->nom }}</a></p>

    @endforeach
    
</x-layout>