<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Edit {{ $car->company }} {{ $car->model }}</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('CarController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Carcompany">Car Company:</label>
            <input type="text" class="form-control" name="company" value="{{$car->company}}" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Model">Model:</label>
            <input type="text" class="form-control" name="model" value="{{$car->model}}" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Status">Status:</label>
            <select name="status"  class="form-control" required>
              <option value="1" @if ($car->status == 1) selected @endif>Activo</option>
              <option value="0" @if ($car->status == 0) selected @endif>Inactivo</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Description">Description:</label>
            <textarea name="description" class="form-control" required>{{$car->description}}</textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>