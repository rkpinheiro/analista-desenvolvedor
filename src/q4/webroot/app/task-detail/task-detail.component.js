angular.module('taskDetail').
	component('taskDetail', {
		templateUrl: '/app/task-detail/task-detail.template.html',
		controller: ['$http', function TaskListController($http){
			var ctrl = this;

			ctrl.deleteItem = function deleteItem(id) {
				$http.delete('/tasks/'+ id +'.json').then(function(response) {
					return response;
			    })
			}

		}],
		bindings: {
			task: '<'
		}
	});