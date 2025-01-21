<div>
    <p>{{$restaurant->name}}</p>
    @foreach (['starters', 'dishes', 'desserts'] as $food)
        @foreach ($restaurant->$food as $item)
            @switch($restaurant->$food->catehory)
                @case("Plats")
                    <h2>Entrées</h2>
                    @break
                @case("dishes")
                    <h2>Plats</h2>
                    @break
                @case("desserts")
                    <h2>Désserts</h2>
                    @break
            @endswitch
            {{-- <livewire:components.food-item :$item :key="$item->id"> --}}
        @endforeach
    @endforeach
</div>