var myApp = angular.module('rex', ['ngMessages','ngResource']);

myApp.controller('mainController', ['$scope', '$filter', '$timeout', function($scope, $filter, $timeout) {
    
    $scope.handle = '';
    
    $scope.lowercasehandle = function() {
        return $filter('lowercase')($scope.handle);
    };
    
    
    $scope.name="atul"
    $timeout(function() {
       
        $scope.name = 'newtwitterhandle';
        
        
    }, 3000);
    
}]);
