<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'price',
        'restaurant_id',
        'food_category_id'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
