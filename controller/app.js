// 'use strict'

var travelApp = angular.module('qyubix', ['ngRoute', 'qyubixCtrl']);

travelApp.config(['$routeProvider', function($routeProvider) {

	$routeProvider.
	when('/home', {
		templateUrl: 'views/home.html',
		controller:'ProductController',
	}).
	when('/hotel', {
		templateUrl: 'views/hotel.html',
		controller:'HotelController',
	}).
	when('/details/:hotelId', {
		templateUrl: 'views/details.html',
		controller:'DetailsController'
	}).
	otherwise({
		redirectTo: '/home'
	});
}]);