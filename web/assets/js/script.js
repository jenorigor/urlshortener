var app = angular.module('shortenurl', ['ngRoute']);

app.config(function($routeProvider) {
  $routeProvider

  .when('/', {
    templateUrl : '/templates/main.html',
    controller  : 'urlcontroller'
  })

  .otherwise({redirectTo: '/'});
});

app.controller('urlcontroller' , function($scope) {
	
	
});
