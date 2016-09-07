'use strict'

//creating an array w [$scope, http avoids issues w minification.
var qyubixControl = angular.module('qyubixCtrl', []);

qyubixControl.directive("scroll", function ($window) {
    return function(scope, element, attrs) {
        angular.element($window).bind("scroll", function() {
            if (this.pageYOffset >= 50) {
                scope.boolChangeClass = true;
            } else {
                scope.boolChangeClass = false;
            }
            scope.$apply();
        });
    };
});

qyubixControl.controller('ProductController', ['$scope', '$http', function( $scope, $http ) {
    $http.get('http://localhost:8080/product?page=1').success(function(data) {
        $scope.products1 = data.content;
    });
    $http.get('http://localhost:8080/product?page=2').success(function(data) {
        $scope.products2 = data.content;
    });
}]);

qyubixControl.controller('HotelController', ['$scope', '$http', function( $scope, $http ) {
    $http.get('controller/data.json').success(function(data) {
        $scope.hotels = data;
    });
}]);

qyubixControl.controller('DetailsController', ['$scope', '$http', '$routeParams', function( $scope, $http, $routeParams ) {
    $http.get('controller/data.json').success(function(data) {
        $scope.hotels = data;
        $scope.whichHotel = $routeParams.hotelId;
    });
}]);