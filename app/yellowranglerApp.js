var yellowranglerApp = angular.module ('yellowranglerApp', []);


// define routes for app
yellowranglerApp.config(function ($routeProvider) {
    $routeProvider
        .when('/',
            {
                controller: 'yellowranglerController',
                templateUrl: 'app/partials/main.php'
            })
        .when('/wtech',
            {
                controller: 'wtechController',
                templateUrl: 'app/partials/wtech.php'
            })
        .when('/video',
            {
                controller: 'videoController',
                templateUrl: 'app/partials/video.php'
            })
        .when('/photo',
            {
                controller: 'photoController',
                templateUrl: 'app/partials/photo.php'
            })
        .when('/outdoors',
            {
                controller: 'outdoorsController',
                templateUrl: 'app/partials/outdoors.php'
            })
        .when('/learn',
            {
                controller: 'learnController',
                templateUrl: 'app/partials/learn.php'
            })
        .when('/sendpicclip',
            {
                controller: 'sendpicclipController',
                templateUrl: 'app/partials/sendpicclip.php'
            })
        .otherwise({redirectTo: '/' });
});
