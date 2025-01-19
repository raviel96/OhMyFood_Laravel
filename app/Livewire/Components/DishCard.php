<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DishCard extends Component
{

    public $dish;

    public function mount($dish) {
        $this->dish = $dish;
    }
    public function render()
    {
        return view('livewire.components.dish-card');
    }
}
