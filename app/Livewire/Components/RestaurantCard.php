<?php

namespace App\Livewire\Components;

use Livewire\Component;

class RestaurantCard extends Component
{

    public $restaurant;

    public function mount($restaurant) {
        $this->restaurant = $restaurant;
    }

    public function render()
    {
        return view('livewire.components.restaurant-card');
    }
}
