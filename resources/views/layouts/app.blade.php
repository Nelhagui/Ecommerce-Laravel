<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/validaciones.js"></script>
    <script src="/js/animaciones.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">




</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-tiem"> 
                            <a class="nav-link" href="/preguntasfrecuentes">Preguntas frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service-add') }}">Subir un servicio</a>
                        </li>
                        <li class="nav-tiem"> 
                            <a class="nav-link" href="/servicio/todos">Todos los Servicios</a>
                        </li>
                        <li class='nav-busqueda'>
                                <form action="/busqueda" method='get'>
                                  <input type="text" name='services' class='input-text' placeholder='Buscar...'>
                                  <input type="submit" value='Buscar'>
                                </form>
                              </li>                  

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Sesión') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item">
                                @if ($user = Auth::user())
                            <img width="40px" src="{{ Storage::url( $user->avatar )}}" alt="" style="border-radius:50%">
                                @endif
                            </li>

                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                         {{ __('Perfil') }}
                                     </a>
                                     {{-- @if (Auth::user()->role == 'user') --}}
                                     <a class="dropdown-item" href="{{ route('services-list') }}">{{ __('Mis servicios') }}
                                    </a>
                                     {{-- @endif --}}

 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                @if (Auth::user()->role == 'admin')
                                    <a class="nav-link" href="{{ route('dashboard-home') }}">{{ __('Dashboard') }}</a>
                                @endif
                            </li>
                        @endguest
                        <a href="{{ route('cart')}}">
                            <img width="20px" height="20px" src="/images/cart.svg" style="margin: 10px" alt="">
                        </a>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="main">
            @yield('content')
        </main>
    </div>

    <script src="js/app.js"></script>
    <script src="js/master.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/holder.min.js"></script>
</body>
</html>
