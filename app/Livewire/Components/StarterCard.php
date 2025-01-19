<?php

namespace App\Livewire\Components;

use Livewire\Component;

class StarterCard extends Component
{

    public $starter;

    public function mount($starter) {
        $this->starter = $starter;
    }

    public function render()
    {
        return view('livewire.components.starter-card');
    }
}
