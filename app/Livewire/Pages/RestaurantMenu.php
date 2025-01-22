<?php

namespace App\Livewire\Pages;

use App\Models\Restaurant;
use Livewire\Component;

class RestaurantMenu extends Component
{

    public $restaurant;   

    public $foods = [];

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;

        $this->foods = [
            'starters' => $restaurant->starters,
            'dishes' => $restaurant->dishes,
            'desserts' => $restaurant->desserts
        ];

    }

    public function render()
    {
        return view('livewire.pages.restaurant-menu');
    }
}
