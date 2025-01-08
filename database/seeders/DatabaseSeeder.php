<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $restaurants = [
            [
            'name' => 'La palette du goût',
            'image' => 'img/jay.jpg',
            'location' => 'Ménilmontant',
            ],
            [
            'name' => 'La note enchanté',
            'image' => 'img/still.jpg',
            'location' => 'Charonne',
            ],
            [
            'name' => 'A la française',
            'image' => 'img/toa.jpg',
            'location' => 'Cité Rouge',
            ],
            [
            'name' => 'Le délice des sens',
            'image' => 'img/louis.jpg',
            'location' => 'Folie Méricourt',
            ],
        ];

        foreach ($restaurants as $restaurant) {
            Restaurant::factory()->create($restaurant);
        }
        
    }
}
