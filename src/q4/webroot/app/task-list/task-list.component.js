angular.module('taskList').
	component('taskList', {
		templateUrl: '/app/task-list/task-list.template.html',
		controller: ['$http', function TaskListController($http){
			var ctrl = this;

			$http.get('/tasks.json').then(function(response) {
		        ctrl.tasks = response.data.tasks;
		    });
		}]
	});