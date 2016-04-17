var myApp = angular.module('rex', []);

myApp.controller('mainController', ['$scope', '$filter',  '$http', function($scope, $filter,$http) {
	
	$scope.username="";
	$scope.userphone="";
	$scope.userstate="";
	$scope.Details="";
    //var data = {
          //  name:$scope.username,
        //    phone:$scope.userphone,
		//	state:$scope.userstate
        //}
		
		$scope.insertData=function(user){
		
		$http.post("request.php", {
		'name':$scope.username,
		'phone':$scope.userphone,
		'state':$scope.userstate})
    
			.success(function(data,status,headers,config){
			console.log("Data Inserted Successfully");
			});
        }
		
		$scope.retrieveData=function(user){
			$http.get('display.php')
            .success(function (data, status, headers, config) {
				
                $scope.Details = data;
				console.log($scope.Details);
				
            })
            .error(function (data, status, header, config) {
                $scope.ResponseDetails = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
			
		}	
}]);
