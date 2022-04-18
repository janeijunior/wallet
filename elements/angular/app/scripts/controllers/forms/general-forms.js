'use strict';

/**
* @ngdoc function
* @name chainFormForms.controller:FormsCtrl
* @description
* # FormsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainFormForms', []);

page.controller('FormsCtrl', ['$scope', '$http', function ($scope, $http) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-pencil';
  $scope.pagetitle = 'General Forms';
  $scope.parentpages = [{'url': 'forms','pagetitle': 'Forms'}];

  $scope.timePickerOpts1 = { defaultTime: false };
  $scope.timePickerOpts2 = { showMeridian: false };
  $scope.timePickerOpts3 = { minuteStep: 30 };

  $scope.datePickerOpts = {
    numberOfMonths: 2,
    showButtonPanel: true
  };

  // get countries
  $http.get('data/countries.json').success(function(data) {
    $scope.countries = data;
  });

  $scope.select2Options = {
    containerCssClass: 'tpx-select2-container',
    dropdownCssClass: 'tpx-select2-drop'
  }

  $scope.select2Options1 = {
    containerCssClass: 'tpx-select2-container',
    dropdownCssClass: 'tpx-select2-drop',
    minimumResultsForSearch: -1
  }

  $scope.select2Options2 = {
    containerCssClass: 'tpx-select2-container',
    dropdownCssClass: 'tpx-select2-drop',
    minimumResultsForSearch: -1,
    formatResult: function(item) {
      return '<i class="fa ' + ((item.element[0].getAttribute('rel') === undefined)?"":item.element[0].getAttribute('rel') ) + ' mr10"></i>' + item.text;
    },
    formatSelection: function(item) {
      return '<i class="fa ' + ((item.element[0].getAttribute('rel') === undefined)?"":item.element[0].getAttribute('rel') ) + ' mr10"></i>' + item.text;
    },
    escapeMarkup: function(m) { return m; }
  }

  // Dropzone
  $scope.dropzoneConfig = {
    url: 'uploads',
    parallelUploads: 3,
    maxFileSize: 30
  };

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('forms.general-forms', {
    url: '/general-forms',
    templateUrl: 'views/forms/general-forms.html',
    controller: 'FormsCtrl'
  });

}]);
