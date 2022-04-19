'use strict';

/*global Dropzone:false */
angular.module('ngDropzone', [])

.directive('ngDropzone', function () {
  return {
    restrict: 'AE',
    template: '<div ng-transclude></div>',
    transclude: true,
    scope: {
      dropzone: '=',
      dropzoneConfig: '=',
      eventHandlers: '='
    },
    link: function(scope, element, attrs, ctrls) {
      
      try { Dropzone; }
      catch (error) {
        throw new Error('Dropzone.js not loaded.');
      }

      var dropzone = new Dropzone(element.get(0), scope.dropzoneConfig);

      if (scope.eventHandlers) {
        Object.keys(scope.eventHandlers).forEach(function (eventName) {
          dropzone.on(eventName, scope.eventHandlers[eventName]);
        });
      }

      scope.dropzone = dropzone;
    }
  };
});
