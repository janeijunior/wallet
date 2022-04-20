'use strict';

/**
* @ngdoc function
* @name chainElemButtons.controller:ButtonsCtrl
* @description
* # ButtonsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemButtons', []);

page.controller('ButtonsCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-hand-o-up';
  $scope.pagetitle = 'Buttons';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.buttons', {
    url: '/buttons',
    templateUrl: 'views/elem/buttons.html',
    controller: 'ButtonsCtrl'
  });

}]);
