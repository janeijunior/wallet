'use strict';

/*global $:false, window:false, Morris:false, setChart:false */
angular.module('ngMorrisChart', []);
angular.module('ngMorrisChart').factory('morrisChartService', function ($timeout) {
  var _charts = [];
  $(window).resize(function(){
    var ready = true;
    if(ready && _charts.length>0) {
      ready = false;
      $timeout(function() {
        for(var i = 0; i < _charts.length; i++) {
          _charts[i].redraw();
        }
        ready = true;
      }, 500);
    }
  });
  return {
    registerChart: function(chart) {
      _charts.splice(0,0, chart);
    }
  };
});

angular.module('ngMorrisChart').directive('morrisChart', function($timeout, $log, morrisChartService) {
  return {
    restrict: 'ACE',
    scope: {
      data: '=',
      options: '='
    },
    replace: true,
    template: '<div></div>',
    link: function(scope, element, attrs) {
      var type = 'line';
      var chartOptions =  scope.options;
      chartOptions.element = element;
      if(attrs.type) { type = attrs.type.toLowerCase(); }
      if(scope.data && scope.data.length>0) {
        chartOptions.data = scope.data;
      }
      var chart = null;

      scope.$watch('options.data', function(val) {
        if(chart===null) {
          switch(type) {
            case 'bar':
              chart = Morris.Bar(chartOptions);
              break;
            case 'area':
              chart = Morris.Area(chartOptions);
              break;
            case 'pie':
            case 'donut':
              $log.error('lplMorrisCharting Error: Use the morris-donut directive to create a donut chart.');
              break;
            default:
              chart = Morris.Line(chartOptions);
          }
          morrisChartService.registerChart(chart);
        }
        if(val && val.length>0) {
          chart.setData(val);
        }
      });

      scope.$watch('data', function(val){
        if(val && val.length > 0){
          scope.options.data = val;
        }
      });
    }
  };
});

angular.module('ngMorrisChart').directive('morrisDonut', function(morrisChartService) {
  return {
    restrict: 'ACE',
    scope: {
      data: '=',
      colors: '=',
      formatter: '&'
    },
    replace: true,
    template: '<div></div>',
    link: function(scope, element, attrs) {
      var chartOptions = {
        element: element,
        data: scope.data
      };
      if(scope.colors && scope.colors.length>0) {
        chartOptions.colors = scope.colors;
      }
      var hFormatter = scope.formatter();
      if(hFormatter) {
        chartOptions.formatter = hFormatter;
      }
      var chart = Morris.Donut(chartOptions);
      morrisChartService.registerChart(chart);
      scope.$watch('data', function(val) {
        if(chart===null){
          setChart();
        }
        if(val && val.length>0) {
          chart.data = val;
          chart.redraw();
        }
      });
    }
  };
});
