<?php

namespace App\Livewire\Pages;

use App\Models\Restaurant;
use Livewire\Component;

class Home extends Component
{

    public $restaurants = [];

    public function mount() {
        $this->restaurants = Restaurant::all();
    }

    public function render()
    {
        return view('livewire.pages.home');
    }
}
