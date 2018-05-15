var app = angular.module('shortenurl', ['ngRoute']);

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

app.controller('urlcontroller' , function($scope) {
	
	
});
