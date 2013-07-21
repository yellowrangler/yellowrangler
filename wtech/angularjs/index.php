<!DOCTYPE html>
<html data-ng-app="contactApp">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Contacts Manager</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />

<style type="text/css">
</style>
</head>
<body>
<div>
    <!-- Placeholder for views -->
    <div data-ng-view=""></div>
    <br />
</div>       
<br />    

<div id="msg" style="padding-left:25px;" class="text-info"></div>

<!-- Vendor Libs: jQuery only used for Bootstrap functionality -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<!-- UI Libs -->
<script src="javascript/bootstrap.js"></script>

<!-- App libs -->
<script src="app/contactApp.js"></script>
<script src="app/controllers/controllers.js"></script>
<script src="app/factories/factories.js"></script>
 
 <script>
 
 </script>
</body>
</html>