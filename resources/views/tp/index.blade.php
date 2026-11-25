<?php
    $produit = [
        'name'=>"Clavier",
        'price'=>3000,
        'image_url'=>"https://imgs.search.brave.com/1QJwcvsft7xJMhWYkGvC2SOd1VItB6aZJxDH5B8KpAA/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/c2JzaW5mb3JtYXRp/cXVlLmNvbS8yNTc5/My90dW5pc2llL21l/ZGl1bS9jbGF2aWVy/LWdhbWVyLXJlZHJh/Z29uLWNydXgtazUx/OC1wcm8tcmdiLXYy/LXR1bmlzaWUuanBn"
    ]

?>


<x-layout>
    <h1>Layout </h1>
    <x-product-card :product="$produit" :in_stck="false" :showAct="true"> 
        <button class="w-full bg-black text-white py-2">Ajouter au panier</button>
    </x-product-card>
</x-layout>