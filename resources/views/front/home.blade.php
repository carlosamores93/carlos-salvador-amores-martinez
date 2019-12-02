<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Home Page Carlos Amores</title>
        <meta content="Home Web Page Carlos Savador Amores MArtinez" name="description">
        <link rel="canonical" href="{{ route('home') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body style="background-image: url({{ $imagen }}); background-size: cover;">

        <div class="container text-center" >
            <h1>Carlos Salvador Amores Martínez</h1>



            {{-- <div class="row align-items-center">
                <div class="col-md-12">
                    <p>sadasdasd</p>
                </div>
            </div> --}}
            <div class="row align-items-center">
                <div class="col-md-12">
                    <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('curriculum') }}"> CURRICULUM VITAE </a>
                </div>
            </div>
            <br>
            <br>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <a class="btn btn-outline-secondary btn-lg btn-block" href="{{ route('crud-mongodb') }}"> CRUD WITH MONGODB </a>
                </div>
            </div>
            <br>
            <br>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <a class="btn btn-outline-success btn-lg btn-block" href="{{ route('crud-vuejs') }}"> CRUD WITH VUEJS </a>
                </div>
            </div>
            <br>
            <br>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <a class="btn btn-outline-info btn-lg btn-block" href="{{ route('contacts.index') }}"> CRUD WITH AngularJS </a>
                </div>
            </div>
            <br>
            <br>

            {{-- <div class="row align-items-center">
                <div class="col-md-12">
                    <p>sadasdasd</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <a class="btn btn-outline-primary btn-lg btn-block"> DESARROLLOS </a>
                </div>
            </div> --}}
        

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
