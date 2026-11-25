<?php

use App\Models\Produits;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');




Route::view('/projects', 'projects')->name('projects');



Route::get('/recipes', function () {

    $recipes = Recipe::all();

    return view('recipes.index', compact('recipes'));

})->name('recipes.index');




Route::get('recipes/{id}', function (int $id) {

    // $recipe = Recipe::find($id)->withCasts(['ingredients' => "array"])->first();
    $recipe = Recipe::findOrFail($id);

    return view('recipes.show', compact('recipe'));

})->name('recipes.show');




Route::get('/produits', function () {

    $produits = Produits::all();


    return view('produits.index', compact('produits'));

})->name('produits.index');




Route::get('/produits/{id}', function (int $id) {
    $produit = Produits::findOrFail($id);


    return view('produits.show', compact('produit'));

})->name('produits.show');
