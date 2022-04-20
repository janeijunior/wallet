'use strict';

/**
* @ngdoc function
* @name chainTablesData.controller:DataTableCtrl
* @description
* # DataTableCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainTablesData', []);

page.controller('DataTableCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-th';
  $scope.pagetitle = 'Data Tables';
  $scope.parentpages = [{'url': 'Tables','pagetitle': 'Tables'}];

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('tables.data-tables', {
    url: '/data-tables',
    templateUrl: 'views/tables/data-tables.html',
    controller: 'DataTableCtrl'
  });

}]);
