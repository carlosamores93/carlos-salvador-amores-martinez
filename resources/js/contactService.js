var app = angular.module('contactService', []);
 
app.factory('ContactService', ['$http', function($http) {
	var api_v1 = 'crud-with-angularjs/contacts';
	return {
		add: function (todoName) {
			var model = {
				TodoName: todoName
			}
			return $http.post(api_v1, model);
		},
		getAllCompletedTodos: function() {
			return $http.get(api_v1+'completed');
		},
		getActiveTodos: function () {
			return $http.get(api_v1+'active');
		},
		get: function () {
			return $http.get(api_v1);
		},
		update: function(id, isDone, todoName) {
			var model = {
				TodoName: todoName,
				IsDone: isDone
			}
			return $http.put(api_v1+id, model);
		}
	};
}]);