<?php

namespace App\Livewire\Components;

use Livewire\Component;

class DessertCard extends Component
{

    public $dessert;

    public function mount($dessert) {
        $this->dessert = $dessert;
    }
    public function render()
    {
        return view('livewire.components.dessert-card');
    }
}
