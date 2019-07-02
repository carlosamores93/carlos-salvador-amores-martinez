<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('cms/assets/images/favicon.png') }}">
        @yield('head')
    </head>

    <body>
        @include('layouts.cms.preloader')
        <div id="main-wrapper">
            @include('layouts.cms.header')
            @include('layouts.cms.aside')
            <div class="page-wrapper">
                @yield('content')
                <footer class="footer text-center">
                    All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
                </footer>
            </div>
        </div>
        @yield('script')
    </body>

</html>