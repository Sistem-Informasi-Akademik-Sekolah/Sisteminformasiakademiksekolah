<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2492E2; border:1px solid #2492E2">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (Auth::check())
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('guru')}}">Halaman guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('kaprog')}}">Halaman kaprog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('walas')}}">Halaman walas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('kurikulum')}}">Kurikulum</a>
                    </li>
                    @endif
                    @if (Auth::user()->role == 'guru')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('guru')}}">Halaman guru</a>
                    </li>
                    @endif
                    @if (Auth::user()->role == 'kaprog')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('kaprog')}}">Halaman kaprog</a>
                    </li>
                    @endif
                    @if (Auth::user()->role == 'walas')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('walas')}}">Halaman walas</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('siswa')}}">Halaman siswa</a>
                    </li>
                    @endif
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
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
