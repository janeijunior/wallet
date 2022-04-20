'use strict';

/**
* @ngdoc function
* @name chainDashboard.controller:DashboardCtrl
* @description
* # DashboardCtrl
* Controller of the chainAngularApp
*/

var dashboard = angular.module('chainDashboard', []);

dashboard.controller('DashboardCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-home';
  $scope.pagetitle = 'Dashboard';

  // Simple Charts
  $scope.simpleData = [{
    data: [[0, 0], [1, 10], [2,5], [3, 12], [4, 5], [5, 8], [6, 0]],
    label: 'New Customer',
    color: '#03c3c4'
  },
  {
    data: [[0, 0], [1, 8], [2,3], [3, 10], [4, 3], [5, 6], [6,0]],
    label: 'Returning Customer',
    color: '#905dd1'
  }];

  $scope.simpleOptions = {
    series: {
      lines: {
        show: false
      },
      splines: {
        show: true,
        tension: 0.4,
        lineWidth: 1,
        fill: 0.4
      },
      shadowSize: 0
    },
    points: {
      show: true,
    },
    legend: {
      container: '#basicFlotLegend',
      noColumns: 0
    },
    grid: {
      hoverable: true,
      clickable: true,
      borderColor: '#ddd',
      borderWidth: 0,
      labelMargin: 5,
      backgroundColor: '#fff'
    },
    yaxis: {
      min: 0,
      max: 15,
      color: '#eee'
    },
    xaxis: {
      color: '#eee'
    }
  };

  // Simple Charts 2
  $scope.simpleData2 = [{
    data: [[0, 0], [1, 3], [2,2], [3, 5], [4, 4], [5, 5], [6, 0]],
    label: 'Visits',
    color: '#428bca'
  },
  {
    data: [[0, 0], [1, 2], [2,1], [3, 3], [4, 3], [5, 4], [6,0]],
    label: 'Unique Visits',
    color: '#b830b3'
  }];

  // Simple Charts 3
  $scope.simpleData3 = [{
    data: [[0, 0], [1, 5], [2,2], [3, 7], [4, 4], [5, 5], [6, 0]],
    label: 'Impressions',
    color: '#905dd1'
  },
  {
    data: [[0, 0], [1, 2], [2,1], [3, 6], [4, 3], [5, 4], [6,0]],
    label: 'Unique Impressions',
    color: '#428bca'
  }];


  $scope.spBarData = [4,3,3,1,4,3,2,2,3,10,9,6];
  $scope.spBarOptions = {
    type: 'bar',
    height:'30px',
    barColor: '#428BCA'
  };

  $scope.spBarData2 = [9,8,8,6,9,10,6,5,6,3,4,2];
  $scope.spBarOptions2 = {
    type: 'bar',
    height:'30px',
    barColor: '#999'
  };

  // Bar
  $scope.barData = [
    { y: '2006', a: 30, b: 20 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ];

  $scope.barOptions = {
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineWidth: '1px',
    fillOpacity: 0.8,
    smooth: false,
    hideHover: true,
  };

}]);

dashboard.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('dashboard', {
    url: '/dashboard',
    templateUrl: 'views/dashboard.html',
    controller: 'DashboardCtrl'
  });

}]);
