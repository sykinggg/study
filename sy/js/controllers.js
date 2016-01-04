var app = angular.module('apps',[]);
app.controller('appctrl',['$scope',function($scope) {
	$scope.greeting = {
		test : 'helloworld'
	}
}])
app.controller('appctrl1',['$scope',function($scope){
	$scope.books = [
		{book:'书名1',auther:'作者1'},
		{book:'书名2',auther:'作者2'},
		{book:'书名3',auther:'作者3'}
		]
}])