<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
</head>

<body>
    @include('partials.nav')
    @include('partials.art')
    @include('partials.nova-page', ['pageData' => $pageAbout])
</body>
</html>
