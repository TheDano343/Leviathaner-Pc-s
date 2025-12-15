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
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Leviathaner Pc´s
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>


                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Componentes
                                </a>

                                <ul class="dropdown-menu dropdown-menu-white"
                                    aria-labellby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{url('procesador')}}">Procesador</a></li>
                                    <li><a class="dropdown-item" href="{{url('gabinete')}}">Gabinete</a></li>
                                    <li><a class="dropdown-item" href="{{url('pantalla')}}">Pantalla</a></li>
                                    <li><a class="dropdown-item" href="{{url('teclado')}}">Teclado</a></li>
                                    <li><a class="dropdown-item" href="{{url('mouse')}}">Mouse</a></li>
                                    <li><a class="dropdown-item" href="{{url('ram')}}">Memoria Ram</a></li>
                                    <li><a class="dropdown-item" href="{{url('grafica')}}">Tarjeta Grafica</a></li>
                                    <li><a class="dropdown-item" href="{{url('madre')}}">Tarjeta Madre</a></li>
                                    <li><a class="dropdown-item" href="{{url('refrigeracion')}}">Refrigeracion</a></li>
                                    <li><a class="dropdown-item" href="{{url('alimentacion')}}">Fuente de
                                            Alimentacion</a></li>
                                    <li><a class="dropdown-item" href="{{url('cpu')}}">Cpu</a></li>
                                    <li><a class="dropdown-item" href="{{url('equipo')}}">Equipos</a></li>
                                    <li><a class="dropdown-item" href="{{url('user')}}">Usuarios</a></li>
                                    <li><a class="dropdown-item" href="{{url('categorium')}}">Categorias</a></li>
                                </ul>

                            </li>
                        </ul>

                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>