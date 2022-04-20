'use strict';

/*global $:false */
angular.module('ngSparkline', [])
.directive('sparkline', function() {
  return {
    restrict: 'ACE',
    scope: {
      data: '=',
      options: '='
    },
    replace: true,
    template: '<div></div>',
    link: function(scope, element, attrs) {
      if(!scope.data) { scope.data = []; }
      if(!scope.options) { scope.options = {}; }

      if(angular.isArray(scope.data) && angular.isArray(scope.options)) {
        for(var i=0; i<scope.data.length; i++) {
          $(element).sparkline(scope.data[i], scope.options[i]);
        }
      } else {
        $(element).sparkline(scope.data, scope.options);
      }
    }
  };
});
