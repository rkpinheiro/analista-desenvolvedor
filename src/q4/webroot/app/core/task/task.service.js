angular.
  module('core.task').
  factory('Task', ['$resource',
    function($resource) {
      return $resource('/tasks.json', {}, {
        query: {
          method: 'GET',
          params: {},
          isArray: true
        }
      });
    }
  ]);