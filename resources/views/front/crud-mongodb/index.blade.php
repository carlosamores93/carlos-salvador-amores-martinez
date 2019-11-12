<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
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
  </body>
</html>