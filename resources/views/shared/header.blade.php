<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">JeugdLink</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if(Route::is('home')) active @endif">
                        <a class="nav-link" href="{{ url('/') }}">Vragen @if(Route::is('home')) <span class="sr-only">(current)</span> @endif</a>
                    </li>
                    <li class="nav-item @if(Route::is('welcome')) active @endif">
                        <a class="nav-link" href="{{ url('/') }}">Gebruikers @if(Route::is('welcome')) <span class="sr-only">(current)</span> @endif</a>
                    </li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->first_name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="profiel/{{ Auth::user()->id }}">
                                        Profiel bijwerken
                                    </a>

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
        </div>

    </nav>
</header>