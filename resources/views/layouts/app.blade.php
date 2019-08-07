<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/122eaf82dd.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md text-secondary shadow-sm" style="padding:0rem;">
            <div class="container">
              <!-- Left Side Of Navbar -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto colorList">
                      <li><a class="nav-link" href="#">@lang('home.contactUs')</a></li>
                      <li><a class="nav-link" href="#">@lang('home.investors')</a></li>
                      <li><a class="nav-link" href="#">PARTNERS</a></li>
                      <li><a class="nav-link" href="#">OFFICIAL FAN CLUB</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto colorList">
                      <li class="nav-item">
                          <a class="nav-link" href="#">24option</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">@lang('home.search')</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link urlLanguage">@lang('home.language')</a>
                      </li>

                        <!-- Authentication Links -->

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-arrow-right"></i> @lang('home.login')</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item registerLink">
                                    <a class="nav-link" href="{{ route('register') }}"> <i class="far fa-star"></i> @lang('home.register')</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
  <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</body>
</html>
