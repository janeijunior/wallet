'use strict';

/**
* @ngdoc function
* @name chainFormTextEditor.controller:TextEditorCtrl
* @description
* # EditorCtrl
* Controller of the chainAngularApp
*/

var page = angular.module('chainFormTextEditor', []);

page.controller('TextEditorCtrl', ['$scope', '$http', '$location', function ($scope, $http, $location) {

  // Page header info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-pencil';
  $scope.pagetitle = 'WYSIWYG';
  $scope.parentpages = [{'url': 'forms','pagetitle': 'Forms'}];

  var appUrl = $location.absUrl().split('#');
  var skinUrl = appUrl[0] + 'styles/ckeditor/skins/themepixels/';

  $scope.ckEditorOptions = {
    skin: 'themepixels,'+ skinUrl,
    dialog_backgroundCoverColor: '#000',
    dialog_backgroundCoverOpacity: 0.65
  };

}]);

page.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('forms.text-editor', {
    url: '/text-editor',
    templateUrl: 'views/forms/text-editor.html',
    controller: 'TextEditorCtrl'
  });

}]);
