<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="46d2fb61852e7bbf" />
    <meta name="google-site-verification" content="Dv38h-uQSsuwVDkhIBW8kLGvcN-p93l7f2DkDJOoax4" />
    <meta name='wmail-verification' content='214851e532e6541c5b2e15791b4192b6' />
    <meta name="description" content="{{ $meta['description'] }}">
    <title>{{ $meta['title'] }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('app/img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('app/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/flexslider.css') }}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ asset('app/css/main.css') }}" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="overlay_form"></div>

@yield('header')
@yield('page_content')
@yield('footer')
@yield('forms')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script defer src="{{ asset('app/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
</body>
</html>
