<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>University Credits 4.0</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div id="app">
    <nav>
        <navbar
            active_route_home="{{ Route::is('home') }}"
            active_route_about="{{ Route::is('about') }}"
            active_route_faq="{{ Route::is('faq') }}"
            route_home="{{ route('home') }}"
            route_about="{{ route('about') }}"
            route_faq="{{ route('faq') }}">
        </navbar>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts/footer')
    </footer>
</div>
</body>

@stack('scripts')
</html>