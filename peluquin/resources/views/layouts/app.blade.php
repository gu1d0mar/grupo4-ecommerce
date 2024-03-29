<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Peluca & Peluquin - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/d0267cb93b.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
              </button>
                <a class="navbar-brand {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                  Peluca & Peluquin
                  {{-- {{ config('app.name', 'Peluca & Peluquin') }} --}}
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                          <a class="nav-link {{ Request::is('shops') ? 'active' : '' }}" href="{{ route('shops') }}">{{ __('Servicios') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">{{ __('Contacto') }}</a>
                      </li>
                    </ul>
                </div>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav my-2 my-lg-0 order-3">
                  <!-- Authentication Links -->
                  @guest
                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                    </li>
                    @if (Route::has('register'))
                      <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                      </li>
                    @endif
                  @else
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white-50" href="{{route('user.profile')}}">Perfil</a>
                        <a class="dropdown-item text-white-50" href="{{route('cart')}}">Carrito <span class="badge badge-secondary">{{count(Cart::content())}}</span></a>
                        <a class="dropdown-item text-white-50" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesion') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
                @endguest
              </ul>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="bg-dark w-100 footer">
      <div class="container">
        <nav class="navbar navbar-dark bg-dark justify-content-center justify-content-md-between">
          <ul class="navbar-nav text-center text-md-left">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('aboutUs') }}">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('faq') }}">Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('terms') }}">Terminos y condiciones</a>
            </li>
          </ul>
          <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}">Peluca & Peluquin</a>
          <div>
            <div class="form-label text-white d-none d-md-block">
              <label for="newsletter">Suscribite</label>
              <p class="text-muted">Y enterate de todas las novedades</p>
            </div>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-1 col-9" type="mail" placeholder="Suscribite" name="">
              <button class="btn btn-outline-success my-2 my-sm-0 col-2" type=""><i class="far fa-envelope"></i></button>
            </form>
          </div>
        </nav>
      </div>
    </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

</body>
</html>
