var app = angular.module('shortenurl', ['ngRoute', 'ngSanitize']);

app.config( ['$routeProvider','$locationProvider', function($routeProvider , $locationProvider) {
  $routeProvider

  .when('/', {
    templateUrl : '/templates/main.html',
    controller  : 'urlcontroller'
  });

  $locationProvider.html5Mode({
	  enabled: true,
	  requireBase: false
	});

}]);

app.controller('urlcontroller' , function($scope , $http) {
	
	$scope.shortenbtn = 'Shorten';
	$scope.shortbtndisabled = false;
	$scope.valid = false;
	$scope.error = false;
	$scope.url = '';

	$scope.shorten = function () {

		$scope.valid = false;
		$scope.error = false;

		$scope.shortbtndisabled = true;

		var dataObj = {
			url : $scope.url
		};

		$http.post('/', dataObj, 'application/json').then(function (response) {

			if(response.data.success == false){

				$scope.error = true;
				$scope.valid = false;

			}

			else {

				$scope.valid = true;
				$scope.error = false;
				$scope.newurl = response.data.url;
				$scope.url = '';

			}

			$scope.shortbtndisabled = false;

		});

	}
	
});
