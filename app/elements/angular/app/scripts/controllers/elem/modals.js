'use strict';

/**
* @ngdoc function
* @name chainElemModals.controller:ModalsCtrl
* @description
* # ModalsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemModals', []);

page.controller('ModalsCtrl', ['$scope', '$modal', function ($scope, $modal) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-laptop';
  $scope.pagetitle = 'Modals';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

  $scope.open = function (size, backdrop) {
    backdrop = backdrop ? backdrop : true;
    var modalInstance = $modal.open({
      templateUrl: 'views/layouts/modal.html',
      size: size,
      backdrop: backdrop,
      controller: function($scope) {
        $scope.ok = function() {
          modalInstance.close();
        };

        $scope.cancel = function() {
          modalInstance.dismiss('cancel');
        };
      }
    });
  };

  $scope.modalPanel = function() {
    var modalInstance = $modal.open({
      templateUrl: 'views/layouts/modalpanel.html',
      controller: function($scope) {
        $scope.cancel = function() {
          modalInstance.dismiss('cancel');
        };
      }
    });
  };

  $scope.modalTab = function() {
    var modalInstance = $modal.open({
      templateUrl: 'views/layouts/modaltab.html',
    });
  };

  $scope.modalAccordion = function() {
    var modalInstance = $modal.open({
      templateUrl: 'views/layouts/modalaccordion.html',
    });
  };


}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.modals', {
    url: '/modals',
    templateUrl: 'views/elem/modals.html',
    controller: 'ModalsCtrl'
  });

}]);
