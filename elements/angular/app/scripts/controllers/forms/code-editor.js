'use strict';

/**
* @ngdoc function
* @name chainFormEditor.controller:EditorCtrl
* @description
* # EditorCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainFormEditor', []);

page.controller('EditorCtrl', ['$scope', function ($scope) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-code';
  $scope.pagetitle = 'Code Editor';
  $scope.parentpages = [{'url': 'forms','pagetitle': 'Forms'}];

  $scope.editorOptions = {
    mode: {name: 'xml', alignCDATA: true},
    lineNumbers: true,
  };

  $scope.editor2Options = {
    mode: {name: 'javascript'},
    lineNumbers: true,
    theme: 'ambiance'
  };

  $scope.editor3Options = {
    mode: {name: 'javascript'},
    lineNumbers: true,
  };

  $scope.commentSelection = function(type) {
    $scope.commentSelected(type);
  }

  $scope.uncommentSelection = function() {
    $scope.uncommentSelected();
  }

  $scope.codemirrorLoaded = function(_editor) {

    _editor.execCommand('selectAll');

    var getSelectedRange = function() {
      return {
        from: _editor.getCursor(true),
        to: _editor.getCursor(false)
      };
    };

    $scope.commentSelected = function(type) {
      var range = getSelectedRange();
      if(type === 'line') {
        _editor.lineComment(range.from, range.to);
      } else {
        _editor.blockComment(range.from, range.to);
      }
    };

    $scope.uncommentSelected = function() {
      var range = getSelectedRange();
      _editor.uncomment(range.from, range.to);
    };

  };

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('forms', {
    url: '/forms',
    template: '<ui-view/>'
  })
  .state('forms.code-editor', {
    url: '/code-editor',
    templateUrl: 'views/forms/code-editor.html',
    controller: 'EditorCtrl'
  });

}]);
