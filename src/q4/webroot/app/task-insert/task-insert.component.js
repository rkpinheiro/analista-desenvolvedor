angular.module('taskInsert').
	component('taskInsert', {
		templateUrl: '/app/task-insert/task-insert.template.html',
		controller: ['Task','$scope','$http', function TaskInsertController(Task, $scope, $http){
			var ctrl = this;
			ctrl.save = function save(name) {
				$http.post('/tasks.json', {name: name}).then(function(response) {
			    	return response;    
			    });
			}

		}]
	});