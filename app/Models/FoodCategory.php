<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $fillable = ['name'];

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
