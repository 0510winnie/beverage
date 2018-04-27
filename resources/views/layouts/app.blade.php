<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
      <nav class="navbar has-shadow">
          <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io" >
              <img src="{{ asset('images/logo.png') }}" alt="WhatToDrink_logo" width="112" class="m-l-150">
            </a>
            <div class="navbar-burger burger m-r-80" data-target="navbarExampleTransparentExample">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        
          <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <div style="font-size:1em; color:LIGHTSALMON" class="m-l-40 m-t-25">
                    <i class="fa fa-map-pin fa-xs"></i>
                  </div>
              <a class="navbar-item " href="https://bulma.io/">Home</a>
                  <div style="font-size:1em; color:CORAL" class="m-l-40 m-t-25">
                      <i class="fa fa-heart"></i>
                    </div>
              <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-3">Top 10</a>
                 <div style="font-size:1em; color:GOLD" class="m-l-40 m-t-25">
                    <i class="fa fa-cube fa-xs"></i>
                  </div>
              <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-23">About</a>
                  <div style="font-size:1em; color:DARKORANGE" class="m-l-40 m-t-25">
                      <i class="fa fa-paper-plane fa-xs"></i>
                    </div>
              <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-3">Contact</a>
              
            </div>
        
            <div class="navbar-end">
              @if (Auth::guest())
              <a href="{{ route('register')}}" class="navbar-item is-tab is-hidden-mobile m-l-3">Register</a>
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link m-r-130" href="{{ route('login') }}">
                  Login
                </a>
                @else
                <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" href="/documentation/overview/start/">
                    <span class="icon m-r-5"><i class=" fa fa-fw fa-bell"></i></span>
                    Notifications
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                    <span class="icon m-r-5"><i class=" fa fa-fw fa-cog"></i></span>
                    Settings
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                    <span class="icon m-r-5"><i class=" fa fa-fw fa-user-circle-o"></i></span>
                    Profile
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                    <span class="icon m-r-5"><i class=" fa fa-fw fa-sign-out"></i></span>
                    Logout
                  </a>
                </div>
              </div>
              @endif
          </div>
        </nav>

          
      </nav> 
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
