<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/ypanel.css') }}" type="text/css">
</head>

<body>
    <div id="app">
        <!-- header -->
        <header>
            <div class="row">
                <nav>
                    <p>Yheader</p>
                    <ul>
                        <li><a href="/">Ymain</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div class="row">
                <p>Yfooter</p>
            </div>
        </footer>
    </div>
</body>

</html>
