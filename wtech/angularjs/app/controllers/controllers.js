// define controllers for app
var controllers = {};
controllers.ContactsController = function ($scope, $http, $location, contactFactory) {
    $scope.contacts = [];
    $scope.messages = [];
    // $scope.newContacts = [];

    init();
    function init() {
        contactFactory.getContacts()
            .success( function(data) {
                $scope.contacts = data;
            })

            .error( function(data) {
                $scope.messages.msg = "Failed ajax to get contacts";
            });
    }

    $scope.insertContact = function () {
        contactFactory.insertContact($scope.newContacts)
            .success( function() {
                $location.path('/');
            })

            .error( function() {
                alert("Failed ajax to add contacts");
            });
    }

    $scope.deleteContact = function (name) {
        contactFactory.deleteContact(name)
            .success( function() {
                init();
            })

            .error( function() {
                alert("Failed ajax to delete contacts");
            });
    }
}

contactApp.controller(controllers); 