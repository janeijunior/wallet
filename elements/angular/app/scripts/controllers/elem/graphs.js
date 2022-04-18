'use strict';

/**
* @ngdoc function
* @name chainElemGraphs.controller:GraphsCtrl
* @description
* # GraphsCtrl
* Controller of the chainAngularApp
*/

var apge = angular.module('chainElemGraphs', []);

page.controller('GraphsCtrl', ['$scope', '$timeout', function ($scope, $timeout) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-bar-chart-o';
  $scope.pagetitle = 'Graphs & Charts';
  $scope.parentpages = [{'url': 'elem','pagetitle': 'UI Elements'}];

  // Simple Charts
  $scope.simpleData = [{
    data: [[0, 9], [1, 7], [2,10], [3, 8], [4, 10], [5, 5], [6, 8]],
    label: 'Firefox',
    color: '#D9534F'
  },
  {
    data: [[0, 7], [1, 5], [2,8], [3, 6], [4, 8], [5, 3], [6, 6]],
    label: 'Chrome',
    color: '#428BCA'
  }];

  $scope.simpleOptions = {
    series: {
      lines: {
        show: true,
        fill: true,
        lineWidth: 1,
        fillColor: {
          colors: [ { opacity: 0.5 }, { opacity: 0.5 } ]
        }
      },
      points: {
        show: true
      },
      shadowSize: 0
    },
    legend: {
      position: 'nw'
    },
    grid: {
      hoverable: true,
      clickable: true,
      borderColor: '#ddd',
      borderWidth: 1,
      labelMargin: 10,
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

  // Using Other Symbols
  $scope.symbolData = [{
    data: [[0, 5], [1, 8], [2,6], [3, 11], [4, 7], [5, 13], [6, 9], [7,8], [8,10], [9,9],[10,13]],
    label: 'Firefox',
    color: '#D9534F',
    points: {
      symbol: 'square'
    }
  },
  { data: [[0, 3], [1, 6], [2,4], [3, 9], [4, 5], [5, 11], [6, 7], [7,6], [8,8], [9,7],[10,11]],
    label: 'Chrome',
    color: '#428BCA',
    lines: {
      fill: true
    },
    points: {
      symbol: 'diamond',
      lineWidth: 2
    }
  }];

  $scope.symbolOptions = {
    series: {
      lines: {
        show: true,
        lineWidth: 2
      },
      points: {
        show: true
      },
      shadowSize: 0
    },
    legend: {
      position: 'nw'
    },
    grid: {
      hoverable: true,
      clickable: true,
      borderColor: '#ddd',
      borderWidth: 1,
      labelMargin: 10,
      backgroundColor: '#fff'
    },
    yaxis: {
      min: 0,
      max: 15,
      color: '#eee'
    },
    xaxis: {
      color: '#eee',
      max: 10
    }
  };

  // Tracking with Crosshair
  var sin = [], cos = [];
  for (var i = 0; i < 14; i += 0.1) {
    sin.push([i, Math.sin(i)]);
    cos.push([i, Math.cos(i)]);
  }

  $scope.chData = [
    { data: sin, label: 'sin(x) = -0.00', color: '#666' },
    { data: cos, label: 'cos(x) = -0.00', color: '#999' }
  ];

  $scope.chOptions = {
    series: {
      lines: {
        show: true,
        lineWidth: 2,
      },
      shadowSize: 0
    },
    legend: {
      show: false
    },
    crosshair: {
      mode: 'xy',
      color: '#D9534F'
    },
    grid: {
      borderColor: '#ddd',
      borderWidth: 1,
      labelMargin: 10
    },
    yaxis: {
      color: '#eee'
    },
    xaxis: {
      color: '#eee'
    }
  };

  // Real Time Updates
  var data = [], totalPoints = 50;
  var updateInterval = 1000;

  var getRandomData = function() {

    if (data.length > 0) {
      data = data.slice(1);
    }

    // Do a random walk
    while (data.length < totalPoints) {

      var prev = data.length > 0 ? data[data.length - 1] : 50,
      y = prev + Math.random() * 10 - 5;

      if (y < 0) {
        y = 0;
      } else if (y > 100) {
        y = 100;
      }
      data.push(y);
    }

    // Zip the generated y values with the x values
    var res = [];
    for (var i = 0; i < data.length; ++i) {
      res.push([i, data[i]])
    }
    return res;
  };

  $scope.rtData = [ getRandomData() ];
  $scope.rtOptions = {
    colors: ['#F0AD4E'],
    series: {
      lines: {
        fill: true,
        lineWidth: 0
      },
      shadowSize: 0	// Drawing is faster without shadows
    },
    grid: {
      borderColor: '#ddd',
      borderWidth: 1,
      labelMargin: 10
    },
    xaxis: {
      color: '#eee'
    },
    yaxis: {
      min: 0,
      max: 100,
      color: '#eee'
    }
  };

  var realtime = function() {
    $scope.$apply(function() {
      $scope.rtData = [ getRandomData() ];
    });

    $timeout(realtime, updateInterval);
  };

  $timeout(realtime, updateInterval);


  // Bar Chart
  var bardata = [
    ['Jan', 10],
    ['Feb', 23],
    ['Mar', 18],
    ['Apr', 13],
    ['May', 17],
    ['Jun', 30],
    ['Jul', 26],
    ['Aug', 16],
    ['Sep', 17],
    ['Oct', 5],
    ['Nov', 8],
    ['Dec', 15]
  ];

  $scope.bcData = [ bardata ];
  $scope.bcOptions = {
    series: {
      lines: {
        lineWidth: 1
      },
      bars: {
        show: true,
        barWidth: 0.5,
        align: 'center',
        lineWidth: 0,
        fillColor: '#428BCA'
      }
    },
    grid: {
      borderColor: '#ddd',
      borderWidth: 1,
      labelMargin: 10
    },
    xaxis: {
      mode: 'categories',
      tickLength: 0
    }
  };


  // Pie Chart
  var piedata = [
    { label: "Series 1", data: [[1,10]], color: '#D9534F'},
    { label: "Series 2", data: [[1,30]], color: '#1CAF9A'},
    { label: "Series 3", data: [[1,90]], color: '#F0AD4E'},
    { label: "Series 4", data: [[1,70]], color: '#428BCA'},
    { label: "Series 5", data: [[1,80]], color: '#5BC0DE'}
  ];

  $scope.pcData = piedata;
  $scope.pcOptions = {
    series: {
      pie: {
        show: true,
        radius: 1,
        label: {
          show: true,
          radius: 2/3,
          formatter: labelFormatter,
          threshold: 0.1
        }
      }
    },
    grid: {
      hoverable: true,
      clickable: true
    }
  };

  function labelFormatter(label, series) {
    return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">'
              + label + '<br/>' + Math.round(series.percent)
            + '%</div>';
  }


  // Morris Chart
  // Line
  $scope.lineData = [
    { y: '2006', a: 30, b: 20 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ];

  $scope.lineOptions = {
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#D9534F', '#428BCA'],
    lineWidth: '2px',
    hideHover: 'auto',
  };

  // Area
  $scope.areaData = [
    { y: '2006', a: 30, b: 20 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ];

  $scope.areaOptions = {
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    lineColors: ['#1CAF9A', '#F0AD4E'],
    lineWidth: '1px',
    fillOpacity: 0.8,
    smooth: false,
    hideHover: true,
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

  // Stacked
  $scope.stackedData = [
    { y: '2006', a: 30, b: 20 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ];

  $scope.stackedOptions = {
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B'],
    barColors: ['#1CAF9A', '#428BCA'],
    lineWidth: '1px',
    fillOpacity: 0.8,
    smooth: false,
    stacked: true,
    hideHover: true,
  };

  // Donut
  $scope.donutData = [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20}
  ];

  // Donut 2
  $scope.donut2Data = [
    {label: "Chrome", value: 30},
    {label: "Firefox", value: 20},
    {label: "Opera", value: 20},
    {label: "Safari", value: 20},
    {label: "Internet Explorer", value: 10}
  ];

  $scope.donut2Colors = ['#D9534F','#1CAF9A','#428BCA','#5BC0DE','#428BCA'];


  // Sparkline Chart
  // Bar
  $scope.spBarData = [4,3,3,1,4,3,2,2,3];
  $scope.spBarOptions = {
    type: 'bar',
    height:'30px',
    barColor: '#428BCA'
  };

  // Line
  $scope.spLineData = [4,3,3,1,4,3,2,2,3];
  $scope.spLineOptions = {
    type: 'line',
    height:'33px',
    width: '50px',
    lineColor: false,
    fillColor: '#1CAF9A'
  };

  // Pie
  $scope.spPieData = [4,3,3,1,4,3,2,2,3];
  $scope.spPieOptions = {
    type: 'pie',
    height:'33px',
    sliceColors: ['#F0AD4E','#428BCA','#D9534F','#1CAF9A','#5BC0DE']
  };

  // Double Line Data
  $scope.spDoubleData = [[4,3,3,5,4,3,2,5,3],[3,6,6,2,6,5,3,2,1]];
  $scope.spDoubleOptions = [{
    type: 'line',
    height:'33px',
    width: '50px',
    lineColor: '#5BC0DE',
    fillColor: false
  },{
    type: 'line',
    height:'33px',
    width: '50px',
    lineColor: '#D9534F',
    fillColor: false,
    composite: true
  }];


}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('elem.graphs', {
    url: '/graphs',
    templateUrl: 'views/elem/graphs.html',
    controller: 'GraphsCtrl'
  });

}]);
