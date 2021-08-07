<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Student Management')</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/general-styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navbar-styles.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')
        <br>
        @yield('content')
    </body>
</html>