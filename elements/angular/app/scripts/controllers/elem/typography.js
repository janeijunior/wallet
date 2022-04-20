'use strict';

/**
* @ngdoc function
* @name chainElemTypo.controller:TypoCtrl
* @description
* # TabsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemTypo', []);

page.controller('TypoCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-navicon';
  $scope.pagetitle = 'Typography';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.typography', {
    url: '/typography',
    templateUrl: 'views/elem/typography.html',
    controller: 'TypoCtrl'
  });

}]);
