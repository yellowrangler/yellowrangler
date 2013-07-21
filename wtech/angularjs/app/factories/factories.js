// define factories
contactApp.factory('contactFactory', function($http) {
    var factory = {};

    factory.getContacts = function() {
        return $http({ 
            method: 'POST', 
            url: 'ajax/getContactsData.php'
        })
    };

    factory.insertContact = function(data) {
        return $http({ 
            method: 'POST', 
            url: 'ajax/addContactsData.php',
            // data: $.param(data)
            data: data
        })
    };

    factory.deleteContact = function(data) {
        return $http({ 
            method: 'POST', 
            url: 'ajax/deleteContactsData.php',
            // data: $.param(data)
            data: data
        })
    };

    return factory;

});

