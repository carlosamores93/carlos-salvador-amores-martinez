<!doctype html>
<html ng-app>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css">
  </head>
  <body>
    <div>
      @php
          $yourName = 'CarlosAmores';
      @endphp
      <label>Name:</label>
      <input type="text" ng-model="{{ $yourName }}" placeholder="Enter a name here">
      <hr>
      <h1>Hello {{$yourName}}!</h1>
    </div>
  </body>
</html>