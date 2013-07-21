// define controllers for app
var controllers = {};
controllers.yellowranglerController = function ($scope, $http, $location, yellowranglerFactory) {

    init();
    function init() {
    	intervalVar=setInterval(function(){buildTitle()},50);
	};
}

controllers.sendpicclipController = function ($scope, $http, $location, $window, $anchorScroll) {

    init();
    function init() {
    	intervalVar=setInterval(function(){buildTitle()},50);

    	$('.imgpointer').click(function() {
	        var img = new Image();
	        // img.src = this.id;
            img.src = this.src;
	        // var img = document.getElementById(this.id); 
	        var width = img.width;
	        var height = img.height;
	        var imageurl = "app/ajax/showimages.php?image="+this.src;
	      	PopUP(imageurl, 'image', height, width, 0);
	    });
	};

	$scope.goToInternalHash = function(id, offset) {
		$location.hash(id);
		$anchorScroll();
		setTimeout(function(){ 
			window.scrollTo(window.pageXOffset, window.pageYOffset - offset);
		},10);
	};
}

controllers.wtechController = function ($scope, $http, $location, yellowranglerFactory, techService) {

    init();
    function init() {
    	$scope.techs = {};
    	intervalVar=setInterval(function(){buildTitle()},50);

    	$scope.techs = techService.getTechs();
		
		$scope.isVisible = false;

	} // end of init


	$scope.toggle = function (idx) {
        $scope.techs[idx].isVisible = ! $scope.techs[idx].isVisible;
    };

    $scope.showMsg = function (idx) {
    	$scope.techs.forEach(function(item) {
			item.isVisible = false;
		});

        $scope.techs[idx].isVisible = true;
    };

    $scope.hideMsg = function (idx) {
        $scope.techs[idx].isVisible = true;
    };

    // Default the blocks to be visible.
	$scope.techs.forEach(function(item) {
		item.isVisible = false;
	});

	$scope.showPanel = function (item,idx) {
        var url = "";
        $("#show-panel").html('');;
        if (item == 'demo')
        {
            url = $scope.techs[idx].demolink;
            PopUP(url, 'demo',600,1200,1)
        }
        else if (item == 'code')
        {
            url = $scope.techs[idx].codelink;
            $("#show-panel").load(url);
        }
    };
}

controllers.videoController = function ($scope, $http, $location, yellowranglerFactory) {

    init();
    function init() {
    	
	};
}

controllers.photoController = function ($scope, $http, $location, yellowranglerFactory) {

    init();
    function init() {
    	
	};
}

controllers.outdoorsController = function ($scope, $http, $location, outdoorsService) {

    init();
    function init() {
    	$scope.outdoors = {};
    	intervalVar=setInterval(function(){buildTitle()},50);

    	$scope.outdoors = outdoorsService.getOutdoors();
		
		$scope.isVisible = false;

	} // end of init


	$scope.toggle = function (idx) {
        $scope.outdoors[idx].isVisible = ! $scope.outdoors[idx].isVisible;
    };

    $scope.showMsg = function (idx) {
    	$scope.outdoors.forEach(function(item) {
			item.isVisible = false;
		});

        $scope.outdoors[idx].isVisible = true;
    };

    $scope.hideMsg = function (idx) {
        $scope.outdoors[idx].isVisible = true;
    };

    // Default the blocks to be visible.
	$scope.outdoors.forEach(function(item) {
		item.isVisible = false;
	});

	$scope.showPanel = function (idx) {
		var url = $scope.outdoors[idx].panel;
    	$("#show-panel").load(url);
    };
}

controllers.learnController = function ($scope, $http, $location, yellowranglerFactory) {

    init();
    function init() {
    	
	};
}

yellowranglerApp.controller(controllers); 
