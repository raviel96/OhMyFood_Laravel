<?php

namespace App\Livewire\Pages;

use App\Models\Restaurant;
use Livewire\Component;

class Home extends Component
{

    public $restaurants = [];

    public $homeLinks = [];

    public function mount() {
        $this->restaurants = Restaurant::all();
        $this->homeLinks = [
            [
                "icon" => "fa-solid fa-mobile-screen",
                "text" => "Choisissez votre restaurant",
            ],
            
            [
                "icon" => "fa-solid fa-list-ul",
                "text" => "Composez votre menu",
            ],

            [
                "icon" => "fa-solid fa-store",
                "text" => "Dégustez au restaurant",
            ]
        ];
        
    }

    public function render()
    {
        return view('livewire.pages.home');
    }
}
