<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD with Vuejs</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset('css/app.css')}}" rel="stylesheet"> <!--Añadimos el css generado con webpack-->
    </head>
    <body>
            <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                {{-- <example-component></example-component> --}}
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <a class="navbar-brand" href="{{ route('home') }}">HomePage</a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('crud-mongodb') }}">MongoDB</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('crud-vuejs') }}">VueJs</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">AngularJs</a>
                              </li>
                            </ul>
                          </div>
                        </nav>
                    </div>
                </div>

                <article-component></article-component>
                <!--Añadimos nuestro componente vuejs-->
                
            </div>
        <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    </body>
</html>