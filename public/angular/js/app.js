$.ajaxSetup({ // i put xcsrf token in the angular headers on every post
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//// routing/////
var app = angular.module('app',[
	'ngRoute',
	'ngCookies',
	'appControllers'
	],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%'); //instead of {{ }} i used <% %> so it wont conflict in the index blade
        $interpolateProvider.endSymbol('%>');
    });


app.config(['$routeProvider',function($routeProvider){ // list of angular routes and its controllers
$routeProvider.
  when('/', {
  templateUrl:'partials/index.html',
  controller:'MainController'
  }).
   when('/images', {
  templateUrl:'partials/images.html',
  controller:'ImagesController'
  }).
   when('/errorPage', {
  templateUrl:'partials/index.html',
  controller:'MainController'
  }).
  otherwise( {
  redirectTo : '/errorPage'
  });
}]);






