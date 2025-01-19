<a class="restaurant" href="{{route('restaurant', $restaurant)}}" wire:navigate="restaurant">
    <img class="restaurant-image" src="{{asset($restaurant->image)}}" alt="Restaurant image">
    <div class="restaurant-description">
        <h3>{{$restaurant->name}}</h3>
        <p>{{$restaurant->description}}</p>
        <button>Heart icon</button>
    </div>
</a>
