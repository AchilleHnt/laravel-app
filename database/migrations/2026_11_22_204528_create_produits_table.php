<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->json('ingredients');
        });

        $produits = [
            1 => [
                'title' => 'Burger Classic',
                'composition' => ['Pain', 'Steak', 'Salade', 'Tomate', 'Sauce'],
            ],
            2 => [
                'title' => 'Pizza Margherita',
                'composition' => ['Pâte', 'Tomate', 'Mozzarella', 'Basilic'],
            ],
            3 => [
                'title' => 'Salade César',
                'composition' => ['Laitue', 'Poulet', 'Parmesan', 'Croûtons', 'Sauce César'],
            ],
            4 => [
                'title' => 'Sandwich Thon',
                'composition' => ['Pain', 'Thon', 'Mayonnaise', 'Salade', 'Oignon'],
            ],
            5 => [
                'title' => 'Omelette',
                'composition' => ['Œufs', 'Oignon', 'Poivre', 'Sel', 'Huile'],
            ],
        ];

        foreach ($produits as $p) {
            DB::table('produits')->insert([
                'nom' => $p['title'],

                'ingredients' => json_encode($p['composition'])
            ]);
        };

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
