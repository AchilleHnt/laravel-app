@props([
    'product' => [
    'name'=>null,
    'price'=>null,
    'image_url'=>null,
    ],
    'currency' => "FCFA",
    'showAct' => true,
    'in_stck' => true
])


<div {{ $attributes->class(['border p-4 rounded shadow', 'opacity-60' => !$in_stck]) }}>
    <div class="image">
        <img src="{{ $product['image_url'] }}">
    </div>
    <div class="desc">
        <h3>Nom du produit : {{ $product['name'] }}</h3>
        <p>Prix : {{ $product['price']. " ". $currency }}</p>
        @if (!$in_stck)
            <span class="inline-block bg-red-100 text-red-800 text-xs px-2 py-1 rounded mt-2">Rupture de Stock</span>
        @endif

        @if ($showAct)
            {{ $slot }}
        @endif
    
    </div>
</div>
