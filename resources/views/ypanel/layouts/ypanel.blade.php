<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ypanel</title>

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
                        <li><a href="/">Ylogout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="content-box">
            <aside>
                <div class="row">
                    <div class="sidebar-content">
                        <h1>Ysidebar</h1>
                        <div class="sidebar-nav">
                            <ul>
                                <li>Yproducts</li>
                                <li>Yoption1</li>
                                <li>Yoption2</li>
                                <li>Yempty</li>
                            </ul>
                            <p>YYYYYYYYYYYYYYYYY</p>
                        </div>
                    </div>
                </div>
            </aside>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <footer>
            <div class="row">
                <p>Yfooter</p>
            </div>
        </footer>
    </div>
</body>

</html>
