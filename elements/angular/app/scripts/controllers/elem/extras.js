'use strict';

/**
* @ngdoc function
* @name chainElemExtras.controller:ExtrasCtrl
* @description
* # ExtrasCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemExtras', []);

page.controller('ExtrasCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-star';
  $scope.pagetitle = 'Extras';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.extras', {
    url: '/extras',
    templateUrl: 'views/elem/extras.html',
    controller: 'ExtrasCtrl'
  });

}]);
