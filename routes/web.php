<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\RestaurantMenu;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/restaurant/{restaurant}/',RestaurantMenu::class)->name('restaurant');
