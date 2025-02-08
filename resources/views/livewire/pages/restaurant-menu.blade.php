<div class="restaurant-menu">
    <div class="hero-image">
        <img src="{{asset($restaurant->image)}}" alt="hero-image" width="200" height="200">
    </div>
    <div class="restaurant-menu-content">
        <div class="restaurant-menu-content-title">
            <h1>{{$restaurant->name}}</h1>
            <button><i class="fa-regular fa-heart"></i></button>
        </div>
        @foreach ($foods as $key => $value)
            @switch($key)
                @case('starters')
                    <h2>ENTRÉES</h2>
                    @break
                @case('dishes')
                    <h2>PLATS</h2>
                    @break
                @case('desserts')
                    <h2>DESSERTS</h2>
                    @break
                @default
                    @break
            @endswitch
            <div class="food-item-container">
                @foreach ($value as $item)
                    <livewire:components.food-item :$item :key="$item->id">
                @endforeach
            </div>
        @endforeach
        <button>Commander</button>
    </div>
</div>