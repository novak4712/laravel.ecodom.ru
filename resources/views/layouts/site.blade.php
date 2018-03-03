<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gulp Project</title>
    <link rel="stylesheet" href="{{ asset('app/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/flexslider.css') }}" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/demo.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/component.css') }}"/>
    <link rel="stylesheet" href="{{ asset('app/css/main.css') }}" type="text/css"/>
    <script src="{{ asset('app/js/modernizr.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="overlay_form"></div>

<section class="modal-form" id="popup1">
    @yield('formContact')
</section>

<section class="modal-form" id="popup2">
    @yield('formOrderGk')
</section>

<section class="modal-form" id="popup3">
    @yield('formOrderTp')
</section>

<a href="#" id="popup__toggle" rel="popup1">
    @yield('contactButton')
</a>

<header>
    @yield('header')
</header>

<main>
    @yield('mainContent')
</main>

<footer id="contact_footer">
    @yield('footer')
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script defer src="{{ asset('app/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('app/js/classie.js') }}"></script>
<script src="{{ asset('app/js/photostack.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
</body>

</html>
