<!doctype html>
<html ng-app>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD with AngularJS</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
  <body>
    <div id="contactos" ng-controller="ContactController">
        <h3 class="page-header">
            Todos <small>({{remaining()}}) remaining</small>
        </h3>
        <ul class="unstyled">
            <li ng-repeat="contact in contactos">
                {{-- <input type="checkbox" ng-model="contact.done"> --}}
                {{ contact.first_name }}
            </li>
        </ul>
    </div>
    {{--
        <div ng-controller="TodoListController as todoList">
          <span>{{todoList.remaining()}} of {{todoList.todos.length}} remaining</span>
          [ <a href="" ng-click="todoList.archive()">archive</a> ]
          <ul class="unstyled">
            <li ng-repeat="todo in todoList.todos">
              <label class="checkbox">
                <input type="checkbox" ng-model="todo.done">
                <span class="done-{{todo.done}}">{{todo.text}}</span>
              </label>
            </li>
          </ul>
          <form ng-submit="todoList.addTodo()">
            <input type="text" ng-model="todoList.todoText"  size="30"
                   placeholder="add new todo here">
            <input class="btn-primary" type="submit" value="add">
          </form>
        </div>
    --}}
    {{-- <script src="{{ asset('js/angular.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script>
        function ContactController($scope, $http){
            $http.get().success(function(contactos){
                $scope.contactos = contactos;
            });

            $scope.remaining = function(){
                var count = 0;
                angular.forEach($scopes.contactos, function(contacto){
                    count += contacto.status ? 0 : 1;
                });
            }
        }
    </script>
  </body>
</html>