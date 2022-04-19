'use strict';

var chainDir = angular.module('chainDirectives', []);

chainDir.directive('pageHeader', function() {
  return {
    restrict: 'AEC',
    templateUrl: 'views/layouts/pageheader.html'
  };
});


/**
* @name: chainPanel
* @description: Generates panel boxes
* @usage: <chain-panel></chainpanel>
* @attributes:
*   title: string,
*   description: string,
*   closable: true (default),
*   toggable: true (default),
*   skin: 'default' (default)
* Directive of the chainAngularApp
*/
chainDir.directive('chainPanel', function() {

  return {
    restrict: 'E',
    transclude: true,
    scope: {
      title: '@',
      description: '@',
      closable: '@',
      toggable: '@',
      skin: '@'
    },
    controller: function($scope) {

      $scope.closePanel = function($event) {
        var panel = angular.element($event.currentTarget).closest('.panel');
        panel.fadeOut(200, function(){
          panel.remove();
        });
      };

      $scope.minPanel = function($event) {
        var btn = angular.element($event.currentTarget);
        var panel = btn.closest('.panel');
        if(!panel.hasClass('maximize')) {

          panel.find('.panel-body, .panel-footer').slideUp(200);
          panel.addClass('maximize');

          btn.find('i').removeClass('fa-minus').addClass('fa-plus');
          btn.attr('tooltip','Maximize Panel');

        } else {

          panel.find('.panel-body, .panel-footer').slideDown(200);
          panel.removeClass('maximize');
          btn.find('i').removeClass('fa-plus').addClass('fa-minus');
          btn.attr('tooltip','Minimize Panel');

        }
      };
    },
    link: function(scope, element, attr) {
      element.on('mouseover', function(event) {
        element.find('.panel-btns').fadeIn('fast');
      });

      element.on('mouseleave', function(event) {
        element.find('.panel-btns').fadeOut('fast');
      });
    },
    templateUrl: 'views/layouts/panel.html'
  };
});


/**
* @name: flot
* @description: Extends angular-flot directive by adding tooltip
*/

/*global $:false, plot:false */
chainDir.directive('flot', function() {
  return {
    restrict: 'EA',
    link: function(scope, element, attributes) {

      var plotArea, previousPoint;
      previousPoint = null;
      plotArea = $(element.children()[0]);

      plotArea.bind('plothover', function (event, pos, item) {

        // For showing tooltip
        $('#x').text(pos.x.toFixed(2));
        $('#y').text(pos.y.toFixed(2));

        if(item) {
          if (previousPoint !== item.dataIndex) {
            previousPoint = item.dataIndex;

            $('#tooltip').remove();
            var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2);

            showTooltip(item.pageX, item.pageY,
              item.series.label + ' of ' + x + ' = ' + y);
          }
        } else {
          $('#tooltip').remove();
          previousPoint = null;
        }

        // For showing crosshair
        latestPosition = pos;
        if (!updateLegendTimeout) {
          updateLegendTimeout = setTimeout(updateLegend, 50);
        }

      });

      var showTooltip = function(x, y, contents) {
        $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
          position: 'absolute',
          display: 'none',
          top: y + 5,
          left: x + 5
        }).appendTo('body').fadeIn(200);
      };

      // Initialize crosshair
      var legends = plotArea.find('.legendLabel');
      legends.each(function () {
        // fix the widths so they don't jump around
        $(this).css('width', $(this).width());
      });

      var updateLegendTimeout = null;
      var latestPosition = null;

      var updateLegend = function() {

        updateLegendTimeout = null;
        var pos = latestPosition;
        var axes = plot.getAxes();

        if (pos.x < axes.xaxis.min || pos.x > axes.xaxis.max ||
          pos.y < axes.yaxis.min || pos.y > axes.yaxis.max) {
            return;
        }

        var i, j, dataset = plot.getData();
        for (i = 0; i < dataset.length; ++i) {

          var series = dataset[i];

          // Find the nearest points, x-wise
          for (j = 0; j < series.data.length; ++j) {
            if (series.data[j][0] > pos.x) {
              break;
            }
          }

          // Now Interpolate
          var y,
          p1 = series.data[j - 1],
          p2 = series.data[j];

          if (p1 === null) {
            y = p2[1];
          } else if (p2 === null) {
            y = p1[1];
          } else {
            y = p1[1] + (p2[1] - p1[1]) * (pos.x - p1[0]) / (p2[0] - p1[0]);
          }

          legends.eq(i).text(series.label.replace(/=.*/, '= ' + y.toFixed(2)));
        }
      };

    }
  };
});


/**
 * Holder.js Directive
**/
/*global Holder:false */
chainDir.directive('holderjs', function () {
  return {
    link: function (scope, element, attrs) {
      Holder.run({ images: element[0], nocss: true });
    }
  };
});


// jQuery UI Slider Directive
chainDir.directive('ngSlider', function() {
  return {
    restrict: 'ACE',
    scope: {
      options: '='
    },
    replace: true,
    template: '<div></div>',
    link: function (scope, element, attrs) {
      $(element).slider(scope.options);
    }
  };
});

// jQuery UI Datepicker Directive
chainDir.directive('ngDatepicker', function() {
  return {
    restrict: 'ACE',
    scope: {
      ngDatepicker: '='
    },
    link: function (scope, element, attrs) {
      $(element).datepicker(scope.ngDatepicker);
    }
  };
});

// jQuery Toggles Directive
chainDir.directive('ngToggle', function() {
  return {
    restrict: 'ACE',
    scope: {
      options: '='
    },
    replace: true,
    template: '<div></div>',
    link: function (scope, element, attrs) {
      $(element).toggles(scope.options);
      var myToggle = $(element).data('toggles');
      if(myToggle.active) {
        $(element).find('.toggle-on').addClass('active');
      }
    }
  };
});

// Autogrow Textarea Directive
chainDir.directive('autogrow', function() {
  return {
    restrict: 'ACE',
    link: function (scope, element, attrs) {
      $(element).autogrow();
    }
  };
});

// Bootstrap Timepicker Directive
chainDir.directive('ngTimepicker', function() {
  return {
    restrict: 'A',
    scope: {
      ngTimepicker: '='
    },
    link: function (scope, element, attrs) {
      $(element).timepicker(scope.ngTimepicker);
    }
  };
});

// Masked Input Directive
chainDir.directive('mask', function () {
  return {
    restrict: 'A',
    link: function (scope, elem, attr) {
      if (attr.mask) {
        elem.mask(attr.mask, { placeholder: attr.maskPlaceholder });
      }
    }
  };
});

// Bootstrap WYSIHTML5 Directive
chainDir.directive('wysihtml5', function() {
  return {
    restrict: 'A',
    scope: {
      wysihtml5: '='
    },
    link: function (scope, element, attrs) {
      $(element).wysihtml5(scope.wysihtml5);
    }
  };
});

// CKEditor Simple Directive
chainDir.directive('ngCkeditor', function() {
  return {
    restrict: 'A',
    scope: {
      ngCkeditor: '='
    },
    link: function (scope, element, attrs) {
      $(element).ckeditor(scope.ngCkeditor);
    }
  };
});

// jQuery Validate Plugin Directive
chainDir.directive('validate', function() {
  return {
    restrict: 'A',
    scope: {
      validate: '='
    },
    link: function (scope, element, attrs) {
      $(element).validate(scope.validate);
    }
  };
});
