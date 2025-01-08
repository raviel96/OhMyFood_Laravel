<div class="home">
    <div class="home-location">
        <i>Location icon</i>
        <p>Paris, Bellville</p>
    </div>
    <div class="home-description">
        <h2>Réservez le menu qui vous convient</h2>
        <p>Découvrez des restaurants d'exception, sélectionnés par nos soins</p>
        <button>Explorer nos restaurants</button>
    </div>
    <div class="home-links">
        <h2>Fonctionnement</h2>
        <div>
            <a href="#">
                <i>Icon 1</i>
                <p>Choisissez un restaurant</p>
            </a>
            <a href="#">
                <i>Icon 2</i>
                <p>Composez votre menu</p>
            </a>
            <a href="#">
                <i>Icon 3</i>
                <p>Dégustez au restaurant</p>
            </a>
        </div>
    </div>
    <div class="home-content">
        @foreach ($restaurants as $restaurant)
            <img src="{{asset($restaurant->image)}}" alt="image" width="200" height="200">
        @endforeach
    </div>
</div>
