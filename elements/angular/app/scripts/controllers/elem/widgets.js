'use strict';

/**
* @ngdoc function
* @name chainElemWidgets.controller:WidgetsCtrl
* @description
* # WidgetsCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainElemWidgets', []);

page.controller('WidgetsCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-laptop';
  $scope.pagetitle = 'Panels & Widgets';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

  // Chart Widget
  $scope.lineData = [
    { y: '2006', a: 50, b: 0 },
    { y: '2007', a: 60,  b: 25 },
    { y: '2008', a: 45,  b: 30 },
    { y: '2009', a: 40,  b: 20 },
    { y: '2010', a: 50,  b: 35 },
    { y: '2011', a: 60,  b: 50 },
    { y: '2012', a: 65, b: 55 }
  ];

  $scope.lineOptions = {
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    gridTextColor: 'rgba(255,255,255,0.5)',
    lineColors: ['#fff', '#fdd2a4'],
    lineWidth: '2px',
    hideHover: 'always',
    smooth: false,
    grid: false
  };

  $scope.spData = [4,3,3,1,4,3,2,2,3,10,9,6];
  $scope.spOptions = {
    type: 'bar',
    height:'30px',
    barColor: '#5cb85c'
  };

  $scope.spData2 = [9,8,8,6,9,10,6,5,6,3,4,2];
  $scope.spOptions2 = {
    type: 'bar',
    height:'30px',
    barColor: '#d9534f'
  };

  // Slider
  $scope.slides = [{
    title: 'Adding Touch Support To Website',
    desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing...',
    active: 'active'
  },{
    title: 'Grab Info From URL',
    desc: 'Voluptatem quia voluptas sit aspernatur aut consectetur odit aut...'
  },{
    title: 'jQuery Form Validation',
    desc: 'Voluptatem quia voluptas sit aspernatur aut consectetur odit aut...'
  }];


}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.widgets', {
    url: '/widgets',
    templateUrl: 'views/elem/widgets.html',
    controller: 'WidgetsCtrl'
  });

}]);
