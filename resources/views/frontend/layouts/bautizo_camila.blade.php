<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bautizo de Camila Leonor Amores Obando</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Información acerca de mi bautizo" name="description">
        <link rel="canonical" href="{{ route('bautizo_camila') }}">

        <!-- Favicons -->
        <link href="{{ asset('curriculum_vitae/img/favicon.ico') }}" rel="icon">
        <link href="{{ asset('curriculum_vitae/img/favicon.ico') }}" rel="apple-touch-icon">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('curriculum_vitae/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset('curriculum_vitae/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum_vitae/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum_vitae/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum_vitae/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('curriculum_vitae/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{ asset('curriculum_vitae/css/style.css') }}" rel="stylesheet">

        <!-- =======================================================
        Theme Name: DevFolio
        Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>

    <body id="page-top">

        @include('frontend.bautizo_camila.nav_star')
        @include('frontend.bautizo_camila.intro')
        @include('frontend.bautizo_camila.about')
        @include('frontend.bautizo_camila.skills')
        @include('frontend.bautizo_camila.work')
        @include('frontend.bautizo_camila.contact')

        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <div id="preloader"></div>

        <!-- JavaScript Libraries -->
        <script src="{{ asset('curriculum_vitae/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/jquery/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/popper/popper.min.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/counterup/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/counterup/jquery.counterup.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('curriculum_vitae/lib/typed/typed.min.js') }}"></script>
        <!-- Contact Form JavaScript File -->
        <script src="{{ asset('curriculum_vitae/contactform/contactform.js') }}"></script>
        <!-- Template Main Javascript File -->
        <script src="{{ asset('curriculum_vitae/js/main.js') }}"></script>

    </body>
</html>
