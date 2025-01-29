<?php

namespace App\Livewire\Components;

use Livewire\Component;

class HomeLinks extends Component
{

    public $icon = '';

    public $text = '';

    public function mount($icon, $text) {
        $this->icon = $icon;
        $this->text = $text;

    }

    public function render()
    {
        return view('livewire.components.home-links');
    }
}
