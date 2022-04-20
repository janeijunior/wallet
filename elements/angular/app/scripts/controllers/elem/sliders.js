'use strict';

/**
* @ngdoc function
* @name chainElemSliders.controller:SlidersCtrl
* @description
* # SlidersCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemSliders', []);

page.controller('SlidersCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-sliders';
  $scope.pagetitle = 'Sliders';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

  $scope.slideOptions = {
    range: 'min',
    max: 100,
    value: 50
  };

  // Primary
  $scope.slide1Options = {
    range: 'min',
    max: 100,
    value: 43
  };

  // Success
  $scope.slide2Options = {
    range: 'min',
    max: 100,
    value: 60
  };

  // Warning
  $scope.slide3Options = {
    range: 'min',
    max: 100,
    value: 37
  };

  // Danger
  $scope.slide4Options = {
    range: 'min',
    max: 100,
    value: 45
  };

  // Info
  $scope.slide5Options = {
    range: 'min',
    max: 100,
    value: 55
  };

  // Range Slider
  $scope.range1Options = {
    range: true,
    max: 100,
    values: [25,75]
  };

  $scope.range2Options = {
    range: true,
    max: 100,
    values: [35,65]
  };

  $scope.range3Options = {
    range: true,
    max: 100,
    values: [25,75]
  };

  $scope.range4Options = {
    range: true,
    max: 100,
    values: [40,60]
  };

  $scope.range5Options = {
    range: true,
    max: 100,
    values: [20,80]
  };

  // Maximum Slider
  $scope.maxOptions = {
    range: 'max',
    max: 100,
    value: 50
  };

  // Minimum Slider
  $scope.minOptions = {
    range: 'min',
    max: 100,
    value: 50
  };

  // Vertical Slider
  $scope.vSlide1Options = {
    orientation: 'vertical',
    range: 'min',
    max: 100,
    value: 50
  };

  $scope.vSlide2Options = {
    orientation: 'vertical',
    range: 'min',
    max: 100,
    value: 43
  };

  $scope.vSlide3Options = {
    orientation: 'vertical',
    range: 'min',
    max: 100,
    value: 60
  };

  $scope.vSlide4Options = {
    orientation: 'vertical',
    range: 'min',
    max: 100,
    value: 37
  };

  $scope.vSlide5Options = {
    orientation: 'vertical',
    range: 'min',
    max: 100,
    value: 45
  };

  $scope.vSlide6Options = {
    orientation: 'vertical',
    range: 'min',
    max: 100,
    value: 55
  };

  // Vertical Range Slider
  $scope.vRange1Options = {
    orientation: 'vertical',
    range: true,
    max: 100,
    values: [25,75]
  };

  $scope.vRange2Options = {
    orientation: 'vertical',
    range: true,
    max: 100,
    values: [35,65]
  };

  $scope.vRange3Options = {
    orientation: 'vertical',
    range: true,
    max: 100,
    values: [25,75]
  };

  $scope.vRange4Options = {
    orientation: 'vertical',
    range: true,
    max: 100,
    values: [40,60]
  };

  $scope.vRange5Options = {
    orientation: 'vertical',
    range: true,
    max: 100,
    values: [20,80]
  };

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.sliders', {
    url: '/sliders',
    templateUrl: 'views/elem/sliders.html',
    controller: 'SlidersCtrl'
  });

}]);
