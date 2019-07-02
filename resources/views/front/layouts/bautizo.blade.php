<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bautizo de Camila Leonor Amores Obando</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Información acerca de mi bautizo" name="description">
        <link rel="canonical" href="{{ route('bautizo') }}">

        <!-- Favicons -->
        <link href="{{ asset('curriculum/img/favicon.ico') }}" rel="icon">
        <link href="{{ asset('curriculum/img/favicon.ico') }}" rel="apple-touch-icon">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('curriculum/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset('curriculum/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{ asset('curriculum/css/style.css') }}" rel="stylesheet">

        <!-- =======================================================
        Theme Name: DevFolio
        Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>

    <body id="page-top">

        @include('front.layouts.bautizo.nav_star')
        @include('front.layouts.bautizo.intro')
        @include('front.layouts.bautizo.about')
        @include('front.layouts.bautizo.skills')
        @include('front.layouts.bautizo.work')
        @include('front.layouts.bautizo.contact')


        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <div id="preloader"></div>

        <!-- JavaScript Libraries -->
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
        <!-- Contact Form JavaScript File -->
        <script src="{{ asset('curriculum/contactform/contactform.js') }}"></script>
        <!-- Template Main Javascript File -->
        <script src="{{ asset('curriculum/js/main.js') }}"></script>

    </body>
</html>
