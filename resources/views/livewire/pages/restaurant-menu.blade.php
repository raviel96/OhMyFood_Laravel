<div>
    <p>{{$restaurant->name}}</p>
        @foreach ($foods as $key => $value)
            @switch($key)
                @case('starters')
                    <h2>Entrées</h2>
                    @break
                @case('dishes')
                    <h2>Plats</h2>
                    @break
                @case('desserts')
                    <h2>Desserts</h2>
                    @break
                @default
                    @break
            @endswitch
            @foreach ($value as $item)
                <livewire:components.food-item :$item :key="$item->id">
            @endforeach
        @endforeach
</div>