'use strict';

/**
* @ngdoc function
* @name chainMaps.controller:MapsCtrl
* @description
* # MapsCtrl
* Controller of the chainAngularApp
*/

var dashboard = angular.module('chainMaps', []);

dashboard.controller('MapsCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-home';
  $scope.pagetitle = 'Maps';

}]);

dashboard.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('maps', {
    url: '/maps',
    templateUrl: 'views/maps.html',
    controller: 'MapsCtrl'
  });

}]);
