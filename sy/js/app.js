var ap = angular.module('appp',['ngRouter','apps']);
ap.config(function($routerProvider) {
	$routerProvider.when('/hello',{
		templateUrl: 'hello.html',
        controller: 'appctrl'
	}).when('/list',{
    	templateUrl:'bookList.html',
    	controller:'appctrl1'
    }).otherwise({
        redirectTo: '/hello'
    })
})