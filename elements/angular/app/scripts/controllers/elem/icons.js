'use strict';

/**
* @ngdoc function
* @name chainElemIcons.controller:IconsCtrl
* @description
* # IconsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemIcons', []);

page.controller('IconsCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-flag';
  $scope.pagetitle = 'Icons';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];


}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.icons', {
    url: '/icons',
    templateUrl: 'views/elem/icons.html',
    controller: 'IconsCtrl'
  });

}]);
