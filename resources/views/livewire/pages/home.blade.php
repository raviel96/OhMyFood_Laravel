<div class="home">
    <div class="home-location">
        <i class="fa-solid fa-location-dot"></i>
        <p>Paris, Bellville</p>
    </div>
    <div class="home-description">
        <h1>Réservez le menu qui vous convient</h1>
        <p>Découvrez des restaurants d'exception, sélectionnés par nos soins</p>
        <button>Explorer nos restaurants</button>
    </div>
    <div class="home-links">
        <h2>Fonctionnement</h2>
        <div class="home-links-container">
            @foreach ($homeLinks as $value)
                <livewire:components.home-links icon="{{$value['icon']}}" text="{{$value['text']}}" :key/>
            @endforeach
        </div>
    </div>
    <section class="home-restaurant">
        <h2>Restaurants</h2>
        <div class="home-restaurant-container">
            @foreach ($restaurants as $restaurant)
                <livewire:components.restaurant-card :$restaurant :key="$restaurant->id">
             @endforeach
        </div>
    </div>
</div>
