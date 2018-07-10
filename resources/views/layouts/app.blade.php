<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ЭКОДОМ: Панель администратора</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('app/css/main.css') }}" type="text/css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ "ЭКОДОМ" }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @guest
            @else
                <h2 class="admin_title" style="text-align: center;">{{ $title }}</h2>
            @endguest
        </div>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    </div>
    <div class="container">
        <div class="row">
            @guest
            @else
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="//public/admin">Главная</a></li>
                    <li><a href="{{ route('pages') }}">Страницы</a></li>
                    <li><a  href="{{ route('profit') }}">Профит</a></li>
                    <li><a  href="{{ route('advantage') }}">Преимущества</a></li>
                    <li><a  href="{{ route('gk') }}">Гибкий камень</a></li>
                    <li><a  href="{{ route('tp') }}">Термопанели</a></li>
                    <li><a  href="{{ route('slider') }}">Слайдер главная</a></li>
                    <li><a  href="{{ route('foto') }}">Фотогалерея</a></li>
                    <li><a  href="{{ route('field') }}">Логотип и Контакты</a></li>
                </ul>
            </div>
            @endguest
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>



    <footer style="margin-top: 100px;">

    </footer>
    <!-- Scripts -->
</body>
</html>
