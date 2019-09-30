<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        {{-- Favicons --}}
        <link href="{{ asset('curriculum/img/favicon.ico') }}" rel="icon">
        <link href="{{ asset('curriculum/img/favicon.ico') }}" rel="apple-touch-icon">
        @yield('head')
    </head>

    <body>
        @if(isset($authentication))
            @yield('content')
        @else
            @include('layouts.cms.preloader')
            <div id="main-wrapper">
                @include('layouts.cms.header')
                @include('layouts.cms.aside')
                <div class="page-wrapper">
                    @include('layouts.cms.message')
                    @yield('content')
                    <footer class="footer text-center">
                        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com" target="_blank">WrapPixel</a>. Live preview <a href="https://wrappixel.com/demos/free-admin-templates/matrix-admin-bt4/html/ltr/index.html" target="_blank">Free Matrix Admin Live Preview</a>
                    </footer>
                </div>
            </div>
        @endif
        @yield('script')
    </body>

</html>