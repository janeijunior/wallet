'use strict';

/**
* @ngdoc function
* @name chainFormValidatio.controller:ValidatioCtrl
* @description
* # ValidatioCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainFormValidation', []);

page.controller('ValidationCtrl', ['$scope', '$http', function ($scope, $http) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-pencil';
  $scope.pagetitle = 'Form Validation';
  $scope.parentpages = [{'url': 'forms','pagetitle': 'Forms'}];

  $scope.validateOption1 = {
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      $(element).closest('.form-group').removeClass('has-error');
    }
  };

  $scope.validateOption2 = {
    errorLabelContainer: $('#basicForm2 .errorForm')
  };

  $scope.validateOption3 = {
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      $(element).closest('.form-group').removeClass('has-error');
    }
  };

  $scope.validateOption4 = {
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      $(element).closest('.form-group').removeClass('has-error');
    },
    ignore: null
  };

  $scope.select2Option = {
    containerCssClass: 'tpx-select2-container',
    dropdownCssClass: 'tpx-select2-drop'
  };

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('forms.validation', {
    url: '/validation',
    templateUrl: 'views/forms/validation.html',
    controller: 'ValidationCtrl'
  });

}]);
