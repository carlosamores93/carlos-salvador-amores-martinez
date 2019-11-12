<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD with MongoDB</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset('css/app.css')}}" rel="stylesheet"> <!--Añadimos el css generado con webpack-->
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">CRUD with MongoDB</div>

                        <div class="card-body text-center">
                            <br />
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('success') }}</p>
                                </div><br />
                            @endif
                            <a href="{{ route('crud-mongodb-add') }}" class="btn btn-success"> Create new item </a>
                            <br><br>


                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company</th>
                                        <th>Model</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cars as $car)
                                        <tr>
                                            <td>{{$car->id}}</td>
                                            <td>{{$car->company}}</td>
                                            <td>{{$car->model}}</td>
                                            <td>{{$car->status}}</td>
                                            <td>{{$car->description}}</td>
                                            <td><a href="{{action('CarController@edit', $car->id)}}" class="btn btn-warning">Edit</a></td>
                                            <td>
                                                <form action="{{action('CarController@destroy', $car->id)}}" method="post" onclick="return confirm('Seguro?')">
                                                @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>