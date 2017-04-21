angular.module('taskList').
	component('taskList', {
		templateUrl: '/app/task-list/task-list.template.html',
		controller: ['Task', function TaskListController(Task){
			var ctrl = this;
			ctrl.tasks = Task.query();	
			console.log(ctrl.tasks)	
		}]
	});