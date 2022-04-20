'use strict';

/**
* @ngdoc function
* @name chainFormLayouts.controller:WizardCtrl
* @description
* # WizardCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainFormWizards', []);

page.controller('WizardsCtrl', ['$scope', '$http', function ($scope, $http) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-pencil';
  $scope.pagetitle = 'Form Wizards';
  $scope.parentpages = [{'url': 'forms','pagetitle': 'Forms'}];

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('forms.wizards', {
    url: '/wizards',
    templateUrl: 'views/forms/wizards.html',
    controller: 'WizardsCtrl'
  });

}]);
