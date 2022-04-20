'use strict';

/**
* @ngdoc function
* @name chainElemTabs.controller:TabsCtrl
* @description
* # TabsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemTabs', []);

page.controller('TabsCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-navicon';
  $scope.pagetitle = 'Tabs & Accordions';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.tabs-accordions', {
    url: '/tabs-accordions',
    templateUrl: 'views/elem/tabs-accordions.html',
    controller: 'TabsCtrl'
  });

}]);
