<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
   
    protected function casts() : array 
    {
        return [
            'ingredients' => 'array',
        ];
    }
    
}