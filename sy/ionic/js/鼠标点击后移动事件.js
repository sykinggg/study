//var app = angular.module('ionicApp', ['ionic']);
//app.controller('myCtrl', function($scope, $ionicGesture, $window, $interval) {
//	$scope.lastEventCalled = 'Try to Drag the content up, down, left or rigth';
//	var element = angular.element(document.quertySelector('#eventPlaceholder'));
//	var events = [{
//		event:'dragup',
//		text:'you dragged me Up!'
//	},{
//		event:'dragdown',
//		text:'You dragged me Down!'
//	},{
//		event:'dragleft',
//		text:'You dragged me Left!'
//	},{
//		event:'dragright',
//		text:'You dragged me Right!'
//	}];
//	angular.forEach(events, function(obj){
//		$ionicGesture.on(obj.event, function(event) {
//			$scope.$apply(function () {
//				$scope.lastEventCalled = obj.text;
//			});
//		}, element);
//	});
//});

angular.module('ionicApp', ['ionic'])

.controller('MyCtrl', function($scope, $ionicGesture, $window, $interval) {
  $scope.lastEventCalled = 'Try to Drag the content up, down, left or rigth';
  var element = angular.element(document.querySelector('#eventPlaceholder')); 
  var events = [{
    event: 'dragup',
    text: 'You dragged me UP!'
  },{
    event: 'dragdown',
    text: 'You dragged me Down!'
  },{
    event: 'dragleft',
    text: 'You dragged me Left!'
  },{
    event: 'dragright',
    text: 'You dragged me Right!'
  }];
  
  angular.forEach(events, function(obj){
    $ionicGesture.on(obj.event, function (event) {
      $scope.$apply(function () {
        $scope.lastEventCalled = obj.text;
      });
    }, element);
  });
});
