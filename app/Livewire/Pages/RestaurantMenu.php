<?php

namespace App\Livewire\Pages;

use App\Models\Restaurant;
use Livewire\Component;

class RestaurantMenu extends Component
{

    public $restaurant;   
    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    public function render()
    {
        return view('livewire.pages.restaurant-menu');
    }
}
