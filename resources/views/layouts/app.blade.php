<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Test')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">

        {{-- Laravel's built-in Bootstrap --}}
        <link rel="stylesheet" href="{{asset('css/flatly.css')}}">
    </head>
    <body>
        @include('inc.nav')
        <div class="container">
            @yield('content')
        </div>
        {{-- @include('inc.footer') --}}
    </body>
</html>
