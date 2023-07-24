<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Yun Nadi Oo Co.,Ltd - Overseas Employment Agency (Myanmar) - @yield('title')</title>
    <!-- Standard Favicon -->
    <link rel="icon" href="{{ asset('data/logo.jpg') }}">

    <meta name="description"
        content="Yun Nadi Oo is the leading Manpower Recruiting Agency based in Myanmar, licensed and authorized by the Ministry of Labor, Employment and Social Security of Myanmar." />
    <meta charset="utf-8">
    <meta name="description"
        content="A leading Manpower Recruiting Agency based in Myanmar, licensed and authorized by the Ministry of Labor, Employment and Social Security of Myanmar.">
    <meta name="keywords"
        content="Yun Nadi Oo Company,Yun Na Di Oo,Myanmar Agency,Myanmar Employment Agency,Myanmar Thai Agency,Job finding agency,Yun,Yoon Nadi Oo,Yoon Na Di Oo,ယွန်းနဒီဦး,ထိုင်းအေဂျင်စီ">

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

    <script>
        $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
            var src = $(this).attr('src');
            var modal;

            function removeModal() {
                modal.remove();
                $('body').off('keyup.modal-close');
            }
            modal = $('<div>').css({
                background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
                backgroundSize: 'contain',
                width: '100%',
                height: '100%',
                position: 'fixed',
                zIndex: '10000',
                top: '0',
                left: '0',
                cursor: 'zoom-out'
            }).click(function() {
                removeModal();
            }).appendTo('body');
            //handling ESC
            $('body').on('keyup.modal-close', function(e) {
                if (e.key === 'Escape') {
                    removeModal();
                }
            });
        });
    </script>
</body>

</html>
