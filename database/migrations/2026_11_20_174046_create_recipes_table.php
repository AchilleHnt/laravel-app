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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('ingredients');
            $table->timestamps();
        });

        $recipes = [
            1 => [
                'title' => 'Spaghetti Bolognaise',
                'ingredients' => ['Spaghetti', 'Viande hachée', 'Sauce tomate']
            ],
            2 => [
                'title' => 'Salade César',
                'ingredients' => ['Laitue', 'Poulet grillé', 'Croûtons']
            ],
            3 => [
                'title' => 'Omelette au fromage',
                'ingredients' => ['Œufs', 'Fromage râpé', 'Beurre']
            ]
        ];

         foreach($recipes as $recipe) {

            DB::table('recipes')->insert([

                'title' => $recipe['title'],
                
                'ingredients' => json_encode($recipe['ingredients'])
            ]);
        };
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
