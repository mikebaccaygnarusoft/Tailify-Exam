var appControllers = angular.module('appControllers', ['ngCookies']);

var csrf_token = $('meta[name="csrf-token"]').attr('content'); // CSRF token on every post, SOP for Angular

appControllers.controller('MainController', ['$scope', '$cookieStore', '$location', '$http', function ($scope, $cookieStore, $location, $http) {
		$location.path( "/" ); //Controller for the Welcome Page
}]);

appControllers.controller('ImagesController', ['$scope', '$cookieStore', '$location', '$http', function ($scope, $cookieStore, $location, $http) {
		$location.path( "/images" ); // Controller for the Images Page
		 $scope.clicked = function(x,y){
         var filename = x;
         var filesize = y;
		 var url = '/tailify_exam/public/api'; //laravel controller path
		 
		 $http.post(url,              // Posting data from Angular to Laravel Backend
	      {filename: filename,
		   filesize: filesize
		  })
		  .success(function(response) {
	        $scope.accounts = response;
			console.log(response);
	      })
	      .error(function(response) {
	        console.log(response);
	      });
		};
}]);
