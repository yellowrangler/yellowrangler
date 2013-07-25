<!DOCTYPE html>
<html lang="en" data-ng-app="yellowranglerApp">
<head>
<title>Yellowrangler</title>
<meta name="description" content="Yellowrangletr y'all">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="layout" content="website"/>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT|PT+Sans" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand " href="#/">
                <img src="img/yellowranglercartoon.png" alt="logo"> <span id="ywTitle" class="bodyFont" style="padding-left:45px;letter-spacing:12px;font-size:35px;" ></span>
            </a>
        </div>
    </div>
</div>

<div style="background:#F8F8F8;" data-ng-view=""></div>

<div id="footer">
    <div class="navbar navbar-fixed-bottom">
        <div class="navbar-inner">
            <div class="container">
                <footer>
                    <div style="padding:25px;" class="row">
                        <div class="span4">
                            <strong>Created by Tarry Cutler</strong>
                        </div>
                        <div class="span4">
                            <strong>Twitter: <a href="http://twitter.com/tarrycutler">@tarrycutler</a></strong>
                        </div>
                    </div>
               </footer>
            </div>
        </div>
    </div>
</div>

<!-- Vendor Libs -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<!-- UI Libs -->
<script src="Scripts/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>

<!-- App libs -->
<script src="app/yellowranglerApp.js"></script>
<script src="app/controllers/controllers.js"></script>
<script src="app/factories/factories.js"></script>
<script src="app/services/outdoorsService.js"></script>
<script src="app/services/wtechService.js"></script>

<script src="Scripts/yellowrangler.js"></script>

</body>
</html>
