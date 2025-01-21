<?php

namespace App\Livewire\Components;

use Livewire\Component;

class FoodItem extends Component
{

    public $item;

    public function mount($item)
    {
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.components.food-item');
    }
}
