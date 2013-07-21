var contactApp = angular.module ('contactApp', []);


// define routes for app
contactApp.config(function ($routeProvider) {
    $routeProvider
        .when('/',
            {
                controller: 'ContactsController',
                templateUrl: 'app/partials/ContactsListShort.html'
            })
        .when('/contacts2',
            {
                controller: 'ContactsController',
                templateUrl: 'app/partials/ContactsListBlock.html'
            })
        .when('/addcontact',
            {
                controller: 'ContactsController',
                templateUrl: 'app/partials/ContactsListAdd.html'
            })
        .otherwise({redirectTo: '/' });
});
