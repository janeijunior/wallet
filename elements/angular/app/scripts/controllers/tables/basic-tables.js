'use strict';

/**
* @ngdoc function
* @name chainTablesBasic.controller:TableCtrl
* @description
* # TableCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainTablesBasic', []);

page.controller('TableCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-th';
  $scope.pagetitle = 'Basic Tables';
  $scope.parentpages = [{'url': 'Tables','pagetitle': 'Tables'}];

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('tables', {
    url: '/tables',
    template: '<ui-view/>'
  })
  .state('tables.basic-tables', {
    url: '/basic-tables',
    templateUrl: 'views/tables/basic-tables.html',
    controller: 'TableCtrl'
  });

}]);
