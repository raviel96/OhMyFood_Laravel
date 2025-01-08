<?php

namespace App\Models;

use Database\Factories\RestaurantFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'image',
        'location'
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function factory()
    {
        return RestaurantFactory::new();
    }

    public function starters()
    {
        return $this->hasMany(Starter::class);
    }

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function desserts()
    {
        return $this->hasMany(Dessert::class);
    }
}
