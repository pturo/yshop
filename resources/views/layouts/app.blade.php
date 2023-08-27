<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Yshop</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.9.2/css/flag-icons.min.css" />
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
                        <li><a href="/products">Yproducts</a></li>
                        <li>Ycontact</li>
                        <li>Ylogin</li>
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
