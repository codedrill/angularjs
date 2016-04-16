var myApp = angular.module('rex', ['ngMessages', 'ngResource']);

myApp.controller('mainController', function($scope, $log, $filter, $resource) {
    
    console.log($scope.name);
	$log.log($scope.address);
	
	
    
});