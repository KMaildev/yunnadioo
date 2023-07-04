<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Yun Nadi Oo - Overseas Employment Agency (Myanmar) - @yield('title')</title>
    <!-- Standard Favicon -->
    <link rel="icon" href="{{ asset('assets/img/fav/favicon-96x96.png') }}">
    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/fav/android-icon-48x48.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/fav/android-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/fav/apple-icon-114x114.png') }}">

    <!--bootstrap v5.2.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--flag css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flags.css') }}">
    <!--meanmenu-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/meanmenu.css') }}">
    <!--icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!--aos-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
    <!--slick slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!--main style-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!--modernizr-->
    <script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="se-pre-con"></div>

    @include('layouts.menu')

    @if (URL::current() == route('home'))
        @include('layouts.slider')
    @endif

    @yield('content')

    @include('layouts.footer')

    <!--jquery-->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!--bootstrap bundle v5.2.3-->
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.js') }}"></script>
    <!--meanmenu-->
    <script src="{{ asset('assets/js/vendor/jquery.meanmenu.js') }}"></script>
    <!--flag-->
    <script src="{{ asset('assets/js/vendor/jquery.flagstrap.min.js') }}"></script>
    <!--aos-->
    <script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
    <!--slick-->
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <!--easing js-->
    <script src="{{ asset('assets/js/vendor/easing.js') }}"></script>
    <!--main script-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    @yield('script')
</body>
</html>
