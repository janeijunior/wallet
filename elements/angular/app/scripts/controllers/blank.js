'use strict';

/**
* @ngdoc function
* @name chainPageBlank.controller:BlankCtrl
* @description
* # BlankCtrl
* Controller of the chainAngularApp
*/

var blank = angular.module('chainPageBlank', []);

blank.controller('BlankCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-home';
  $scope.pagetitle = 'Blank Page';
  $scope.parentpages = [{'url': 'pages','pagetitle': 'Pages'}];

}]);

blank.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('pages', {
    url: '/pages',
    templateUrl: 'views/pages/blank.html',
    controller: 'BlankCtrl'
  });

}]);
