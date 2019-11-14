var  app = angular.module('mainApp', ['mainRoutes', 'contactService', 'ngAnimate', 'toastr', 'ui.bootstrap']);
 
app.controller('mainController', ['$scope', '$http', 'toastr', 'ContactService', function($scope, $http, toastr, ContactService) {
    $scope.lists = [];
    $scope.completedTodos = [];
    $scope.allTodos = [];
 
    var initializeTodos = function() {
        ContactService.getActiveTodos().success(function (data) {
            $scope.lists = data;
            $scope.anyActiveTodos = $scope.lists.length;
            console.log($scope.lists);
        });
        ContactService.get().success(function (data) {
            $scope.allTodos = data;
        });
        ContactService.getAllCompletedTodos().success(function (data) {
            $scope.completedTodos = data;
            console.log('completed todos');
            console.log($scope.completedTodos);
        });
    }
 
    initializeTodos();
 
    $scope.addTodos = function () {
        var input = $scope.myinput;
 
        ContactService.add(input).success(function (data) {
            $scope.myinput = &quot;&quot;;
            toastr.success('Successfully added!', 'Success');
            $scope.anyActiveTodos = true;
 
            initializeTodos();
            $scope.lists.push({
                id: data.id,
                TodoName: input,
                IsDone: false
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
    $scope.done = function (list) {
        console.log('task done!');
        console.log(list);
 
        if (list.IsDone) {
            var todoIndex = $scope.lists.indexOf(list);
 
            ContactService.update(list.id, list.IsDone, list.TodoName).success(function() {
                $scope.anyActiveTodos = $scope.lists.length;
 
                initializeTodos();
                toastr.success('Done a task!', 'Success');
            });
 
            //todo: logic here...
        }
    }
 
}]);