'use strict';

/**
* @ngdoc function
* @name chainFormLayouts.controller:LayoutsCtrl
* @description
* # LayoutsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainFormLayouts', []);

page.controller('LayoutsCtrl', ['$scope', '$http', function ($scope, $http) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-pencil';
  $scope.pagetitle = 'Form Layouts';
  $scope.parentpages = [{'url': 'forms','pagetitle': 'Forms'}];

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('forms.layouts', {
    url: '/layouts',
    templateUrl: 'views/forms/layouts.html',
    controller: 'LayoutsCtrl'
  });

}]);
