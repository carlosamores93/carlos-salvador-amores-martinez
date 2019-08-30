<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Carlos Salvador Amores Martinez</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Curriculum vitae de Carlos Salvador Amores Martinez" name="description">
        <link rel="canonical" href="{{ route('curriculum') }}">

        {{-- Favicons --}}
        <link href="{{ asset('curriculum/img/favicon.ico') }}" rel="icon">
        <link href="{{ asset('curriculum/img/favicon.ico') }}" rel="apple-touch-icon">

        {{-- Bootstrap CSS File --}}
        <link href="{{ asset('curriculum/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        {{-- Libraries CSS Files --}}
        <link href="{{ asset('curriculum/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        {{-- Main Stylesheet File --}}
        <link href="{{ asset('curriculum/css/style.css') }}" rel="stylesheet">


        <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="44a44001-0eb9-4ff3-817e-f2118aee54ae" type="text/javascript" async></script>

        {{-- Global site tag (gtag.js) - Google Analytics --}}
        <script type="text/plain" data-cookieconsent="marketing" async src="https://www.googletagmanager.com/gtag/js?id=UA-141909368-1"></script>
        <script data-cookieconsent="statistics">
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-141909368-1');
        </script>

        {{-- =======================================================
        Theme Name: DevFolio
        Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
        ======================================================= --}}
    </head>

    <body id="page-top">

        @yield('content')

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <div id="preloader"></div>

        {{-- JavaScript Libraries --}}
        <script src="{{ asset('curriculum/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('curriculum/lib/jquery/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('curriculum/lib/popper/popper.min.js') }}"></script>
        <script src="{{ asset('curriculum/lib/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('curriculum/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('curriculum/lib/counterup/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('curriculum/lib/counterup/jquery.counterup.js') }}"></script>
        <script src="{{ asset('curriculum/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('curriculum/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('curriculum/lib/typed/typed.min.js') }}"></script>
        {{-- Contact Form JavaScript File --}}
        <script src="{{ asset('curriculum/contactform/contactform.js') }}"></script>
        {{-- Template Main Javascript File --}}
        <script src="{{ asset('curriculum/js/main.js') }}"></script>

    </body>
</html>
