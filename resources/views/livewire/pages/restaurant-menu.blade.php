<div>
    <p>{{$restaurant->name}}</p>
    @foreach ($restaurant->starters as $starter)
        <livewire:components.starter-card :$starter :key="$starter->id">
    @endforeach
</div>
