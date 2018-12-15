<!DOCTYPE html>
<!--[if IE 10]>    <html class="no-js ie10" lang="en"> <![endif]-->
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JeugdLink</title>

    <!-- Meta -->
    <link rel="author" href="{{ asset('humans.txt') }}">

    <meta name="description" content="Conversation starter">
    <meta name="url" content="{{ Request::url() }}">

    <!-- Open Graph -->
    <meta property="fb:app_id" content="{{ env('FB_APP_ID', '') }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Laravel')">
    <meta property="og:image" content="@yield('image', '')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:site_name" content="@yield('title')">
    <meta property="og:locale" content="{{ Localization::getCurrentLocaleRegional() }}">
    @foreach(Localization::getSupportedLocales() as $locale)
        <meta property="og:locale:alternate" content="{{$locale->regional()}}" />
    @endforeach

    <!-- Twitter cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="twitter:title" content="@yield('title', 'Laravel')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">

    <!-- Android theme color -->
    <meta name="theme-color" content="#E64545">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>

    <div id="app">

        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ url('/') }}">JeugdLink</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item @if(Route::is('welcome')) active @endif">
                            <a class="nav-link" href="{{ url('/') }}">Home @if(Route::is('welcome')) <span class="sr-only">(current)</span> @endif</a>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item @if(Route::is('login')) active @endif">
                                <a class="nav-link" href="{{ route('login') }}">Login @if(Route::is('login')) <span class="sr-only">(current)</span> @endif</a>
                            </li>
                            <li class="nav-item @if(Route::is('register')) active @endif">
                                <a class="nav-link" href="{{ route('register') }}">Register @if(Route::is('register')) <span class="sr-only">(current)</span> @endif</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </header>

        <main role="main" class="container mt-4">
            @if(count($errors) > 0)
                <div class="alert alert-danger mb-4" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ ucfirst($error) }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </main>

    </div>

    @include('cookieConsent::index')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Outdated browser -->
    <script src="{{ asset('js/vendor/outdatedbrowser/outdatedbrowser.min.js') }}"></script>
    <script>
        //event listener: DOM ready
        function addLoadEvent(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function() {
                    if (oldonload) {
                        oldonload();
                    }
                    func();
                }
            }
        }
        //call plugin function after DOM ready
        addLoadEvent(function(){
            outdatedBrowser({
                bgColor: '#f25648',
                color: '#ffffff',
                lowerThan: 'transform',
                languagePath: '{{ asset('js/vendor/outdatedbrowser/lang/' . App::getLocale() . '.html') }}'
            })
        });
    </script>
    <div id="outdated"></div>

    @if(App::environment('production'))
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-########-#', 'auto');
            ga('send', 'pageview');
        </script>
    @endif

</body>
</html>
