'use strict';

/**
* @ngdoc function
* @name chainElemAlerts.controller:AlertsCtrl
* @description
* # AlertsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemAlerts', []);

page.controller('AlertsCtrl', ['$scope', '$modal', function ($scope, $modal) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-bell';
  $scope.pagetitle = 'Alerts & Notifications';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

  $scope.openModal = function(size) {

    var modalInstance = $modal.open({
      templateUrl: 'views/layouts/modal.html',
      size: size,
      controller: function($scope) {
        $scope.cancel = function () {
          modalInstance.dismiss('cancel');
        };
      }
    });
  };

  $scope.growl = function(grwl) {
    switch(grwl) {
      case 1:
        jQuery.gritter.add({
          title: 'This is a regular notice!',
          text: 'This will fade out after a certain amount of time.',
          image: 'images/screen.png',
          sticky: false,
          time: ''
        });
      break;

      case 2:
        jQuery.gritter.add({
          title: 'This is a regular notice!',
          text: 'This will fade out after a certain amount of time.',
          sticky: false,
          time: ''
        });
      break;

      case 3:
        jQuery.gritter.add({
          title: 'This is a regular notice!',
          text: 'This will fade out after a certain amount of time.',
          class_name: 'growl-primary',
          image: 'images/screen.png',
          sticky: false,
          time: ''
        });
      break;

      case 4:
        jQuery.gritter.add({
          title: 'This is a regular notice!',
          text: 'This will fade out after a certain amount of time.',
          class_name: 'growl-success',
          image: 'images/screen.png',
          sticky: false,
          time: ''
        });
      break;

      case 5:
        jQuery.gritter.add({
          title: 'This is a regular notice!',
          text: 'This will fade out after a certain amount of time.',
          class_name: 'growl-warning',
          image: 'images/screen.png',
          sticky: false,
          time: ''
        });
      break;

      case 6:
        jQuery.gritter.add({
          title: 'This is a regular notice!',
          text: 'This will fade out after a certain amount of time.',
          class_name: 'growl-danger',
          image: 'images/screen.png',
          sticky: false,
          time: ''
        });
      break;

      case 7:
        jQuery.gritter.add({
          title: 'This is a regular notice!',
          text: 'This will fade out after a certain amount of time.',
          class_name: 'growl-info',
          image: 'images/screen.png',
          sticky: false,
          time: ''
        });
      break;
    }
  };

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem', {
    url: '/elem',
    template: '<ui-view/>'
  })
  .state('elem.alerts', {
    url: '/alerts',
    templateUrl: 'views/elem/alerts.html',
    controller: 'AlertsCtrl'
  });

}]);
