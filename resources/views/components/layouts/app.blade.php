<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'OhMyFood' }}</title>
    </head>
    <body>
        <div class="container">
            <livewire:partials.header />
            {{ $slot }}
            <livewire:partials.footer /> 
        </div>
    </body>
</html>
