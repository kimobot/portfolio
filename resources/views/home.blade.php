<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->

        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
              @foreach($artworks as $artwork)
                  <div class="">
                    {{ $artwork->title }}
                    {{ $artwork->description }}
                    <img src="{{ asset('storage/' . $artwork->image) }}" alt="">
                  </div>
              @endforeach
        </div>
    </body>
</html>
