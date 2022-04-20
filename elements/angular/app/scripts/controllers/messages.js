'use strict';

/**
* @ngdoc function
* @name chainMessages.controller:MessagesCtrl
* @description
* # MessagesCtrl
* Controller of the chainAngularApp
*/

var msg = angular.module('chainMessages', []);

msg.controller('MessagesCtrl', ['$scope', '$http', '$state', '$location', function ($scope, $http, $state, $location) {


  // Page Header Info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-envelope-o';
  $scope.pagetitle = 'Messages';

  // Get Messages
  $http.get('data/messages.json').success(function(data) {
    $scope.messages = data;
  });

  // Update message list based on clicked menu
  $scope.setFolder = function(folderType, folderName, $event) {

    if($location.path() !== '/messages') {
      $state.go('messages');
    }

    // set menu to active
    angular.element('.nav-msg li.active').removeClass('active');
    angular.element($event.currentTarget).parent().addClass('active');

    $scope.folderBtn = function(msg) {
      return (msg[folderType] === folderName)? true : false;
    };

  };

  // Count new messages in every section wrapped in a badge
  $scope.newMsgCount = function(folderType, folderName) {
    var count = 0;
    for(var i=0; i < $scope.messages.length; i++) {
      if($scope.messages[i].unread && $scope.messages[i][folderType] === folderName) { count++; }
    }
    return count;
  };

  // Count number of checked rows
  $scope.ckbox = [];
  $scope.ckndx = [];

  $scope.setChecked = function(msg, index) {

    $scope.ckbox[index];
    $scope.checkedBoxes = 0;

    angular.forEach($scope.ckbox, function(value){
      $scope.checkedBoxes += value ? 1 : 0;
    });

    if ($scope.ckndx.indexOf(msg) === -1) {
      $scope.ckndx.push(msg);
    } else {
      $scope.ckndx.splice($scope.ckndx.indexOf(msg), 1);
    }
  };

  // Delete selected rows
  $scope.deleteSelectedRows = function() {

    angular.forEach($scope.ckndx, function (value, index) {
      index = $scope.messages.indexOf(value);
      $scope.messages.splice($scope.messages.indexOf(value), 1);
    });

    $scope.ckbox = [];
    $scope.ckndx = [];
    $scope.checkedBoxes = 0;
  };

}]);

msg.controller('ViewMessageCtrl', ['$scope', '$http', '$stateParams', '$state', function ($scope, $http, $stateParams, $state) {

  // Page Header Info (views/layouts/pageheader.html)
  $scope.pageicon = 'fa fa-envelope-o';
  $scope.pagetitle = 'View Message';

  $scope.msgId = $stateParams.msgId;

}]);

msg.config(['$stateProvider', function($stateProvider) {

  $stateProvider
  .state('messages', {
    url: '/messages',
    templateUrl: 'views/messages.html',
    controller: 'MessagesCtrl'
  })
  .state('messages.view', {
    url: '/view/:msgId',
    templateUrl: 'views/view_message.html',
    controller: 'ViewMessageCtrl'
  });

}]);
