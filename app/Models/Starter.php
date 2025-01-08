<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Starter extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'price',
        'restaurant_id'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
