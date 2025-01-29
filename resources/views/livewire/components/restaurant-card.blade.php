<a class="restaurant-card" href="{{route('restaurant', $restaurant)}}" wire:navigate="restaurant">
    <img class="restaurant-card-image" src="{{asset($restaurant->image)}}" alt="Restaurant image">
    <div class="restaurant-card-description">
        <h3>{{$restaurant->name}}</h3>
        <p>{{$restaurant->description}}</p>
        <button><i class="fa-regular fa-heart"></i></button>
    </div>
</a>