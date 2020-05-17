<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div id="app">
    <nav>
        @include('layouts/navbar')
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
