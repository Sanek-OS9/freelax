<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--  <link rel="stylesheet" href="{{ elixir("css/core.css") }}">  --}}
    @yield('css')

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="hg">  
    <header class="hg__header">
        <div class="logo">logo</div>
        <div class="navigation">
        @guest
            <div><a href="{{ route('login') }}">Login/Register</a></div>
            {{--  <div><a href="{{ route('register') }}">Register</a></div>  --}}
            <div><a href="{{ route('login::github') }}">GitHub</a></div>
            <div><a href="{{ route('login::facebook') }}">FaceBook</a></div>
            <div><a href="{{ route('login::google') }}">Google</a></div>
        @else
            <div>{{ Auth::user()->name }}</div>
            <div>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endguest
        </div>
        <div class="search">search</div>
    </header>
    <main class="hg__main">
        @yield('content')
    </main>
    <aside class="hg__left">Menu</aside>
    <aside class="hg__right">Ads</aside>
    <footer class="hg__footer">Footer</footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    </body>
</html>
